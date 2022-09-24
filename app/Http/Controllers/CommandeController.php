<?php

namespace App\Http\Controllers;
use App\Models\Facture;

use App\Models\Commande;
use Barryvdh\DomPDF\PDF;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class CommandeController extends Controller
{
    
    // fonction qui nous permet de lister les commandes

    public function index (){
        $commandes = Commande::paginate(5);
        return view('pages.commande', [
            'commandes'=>$commandes,
        ]);
    }

    // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        $fournisseurs = Fournisseur::All();
        return view('pages.ajoutCommande',[
            'fournisseurs'=>$fournisseurs
        ]);
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){
        $request->validate([
                    'numero_commande'=> 'required',
                    'description'=> 'required',
                    'date_commande'=> 'required',
                    'date_livraison'=> 'required',
                    'fournisseur_id'=> 'required',

        ]);
    
        $form_data = array(
            'numero_commande'=> $request->numero_commande,
            'description'=> $request->description,
            'date_commande'=> $request->date_commande,
            'date_livraison'=> $request->date_livraison,
            'fournisseur_id'=> $request->fournisseur_id,

        );

        $fournisseur = Fournisseur::find($request->fournisseur_id);
        $commandes = Commande::All();
    
        Commande::create($form_data);
       return view('pages.commande', compact('form_data', 'fournisseur', 'commandes'));
        // return redirect()->Route('facture.index');
    }
    
    function get_facture()
    {
        $facture = DB::table('commandes')
                            ->limit(1)
                            ->latest()
                            ->get();
           
        return $facture;
                          
    }
    function pdf()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
        convert_facture_to_html());
        $pdf->stream();
    }
    function convert_facture_to_html()
    {
        $facture = $this->get_facture();
        foreach($facture as $facture)
        { 
        $output = '
            <div class="row">
            <div class="col">
                <p>Numero Commande</p>
             </div>
            <div class="col">
                <p>{{'.$facture->numero_commande.'}}</p>
            </div>
            <div class="row">
                <div class="col">
                    <p>Description</p>
                </div>
                <div class="col">
                    <p>{{'.$facture->description.'}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Date Commande</p>
                </div>
                <div class="col">
                    <p>{{'.$facture->date_commande.'}}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Date Livraison</p>
                </div>
                <div class="col">
                    <p>{{'.$facture->date_livraison.'}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Fournisseur prenom fournisseur</p>
                    <p>Fournisseur nom fournisseur</p>
                </div>
                <div class="col">
                
                </div>
            </div>

        ';
    }
    
    return $output;
    } 
}
