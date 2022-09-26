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

        
        $commandes->update($form_data);
    
        return back()->withSuccess("entregistrement réussi");
    }
  
    public function delete($id){
        $commande = Commande::find($id);
        $commande->delete();
        return back()->withSuccess("suppression réussi");
    }
}
