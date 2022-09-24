<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactureController extends Controller
{
    
    // fonction qui nous permet de lister les produits
    public function index (){
        $factures = Commande::All();
        return view('pages.facture', [
            'factures'=>$factures
        ]);
    }

    // // fonction qui nous permet d'appeler le formulaire d'ajout
    // public function create(){
    //     $factures = Facture::All();
    //     return view('pages.ajoutFacture',[
    //         'factures'=>$factures
    //     ]);
    // }

    // // fonction qui nous permet de récupérer les données du formulaire 
    // //et les insère dans la base de donnée
    // public function store (Request $request){
    //     $request->validate([
    //                 'numero_commande'=> 'required',
    //                 'description'=> 'required',
    //                 'date_commande'=> 'required',
    //                 'date_livraison'=> 'required',
    //                 'fournisseur_id'=> 'required',

    //     ]);
    
    //     $form_data = array(
    //         'numero_commande'=> $request->numero_commande,
    //         'description'=> $request->description,
    //         'date_commande'=> $request->date_commande,
    //         'date_livraison'=> $request->date_livraison,
    //         'fournisseur_id'=> $request->fournisseur_id,

    //     );
    
    //     Facture::create($form_data);
    
    //     return redirect()->Route('facture.index');
    // } 

    // public function get_RecupFacture($id)
    // {
    //     $commandes = Commande::All();
    //     foreach($commandes as $commande){
        
    //         $form_data = Commande::where($commande->id, '=', count($commandes) + 1);
    //         return view('facture.index', compact($form_data));
    //     }
    // }
}
