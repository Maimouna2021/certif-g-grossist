<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produit;
use App\Models\ProduitVendu;
use Illuminate\Http\Request;

class ProduitVenduController extends Controller
{
     // fonction qui nous permet de lister les produitVendus
     public function index (){
        $produitVendus = ProduitVendu::paginate(2);
        return view('pages.listeVente', [
            'produitVendus'=>$produitVendus
        ]);
    }

     // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        $produitVendus = ProduitVendu::All();
        $produits= Produit::All();
        $clients= Client::All();
        return view('pages.vente',[
            'produitVendus'=>$produitVendus,
            'clients'=>$clients,
            'produits'=>$produits,
        ]);
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){

        $request->validate([
                    'quantite'=> 'required',
                    'produit_id'=> 'required',
                    'client_id'=> 'required',
        ]);
        
        $form_data = array(
            'quantite'=> $request->quantite,
            'produit_id'=> $request->produit_id,
            'client_id'=> $request->client_id,
        );
        
    
        ProduitVendu::create($form_data);
    
        return redirect()->Route('produitVendu.index');
    }

    
    public function edit($id){
        $produitVendu = ProduitVendu::find($id);
        return view('pages.listeVente', compact('produitVendu'));
    }

    public function update($id, Request $request ){
        $produitVendu = ProduitVendu::find($id);

        $request->validate([
            'libelle'=> 'required',
            'nom'=> 'required',
            'prenom'=> 'required',
            'quantite'=> 'required',
        ]);

        $form_data = array(
            'libelle'=> $request->libelle,
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'quantite'=> $request->quantite,
        );
        
        $produitVendu->update($form_data);
    
        return back()->withSuccess("entregistrement réussi");
    }

    public function delete($id){
        $produitVendu = ProduitVendu::find($id);
        $produitVendu->delete();
        return back()->withSuccess("suppression réussi");
    }


}
