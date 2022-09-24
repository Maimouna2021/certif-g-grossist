<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use PDF;


class ProduitController extends Controller
{
     // fonction qui nous permet de lister les produits
    public function index (){
        $produits = Produit::paginate(10);    
        return view('pages.produit', [
            'produits'=>$produits
        ]);
    }
        
     // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        return view('pages.ajoutProduit');
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){
        $request->validate([
                    'libelle'=> 'required',
                    'description'=> 'required',
                    'quantite'=> 'required',
                    'prix_unitaire'=> 'required',
                    'date_entre'=> 'required',
                    'date_peremption'=> 'required',
        ]);
    
        $form_data = array(
            'libelle'=> $request->libelle,
            'description'=> $request->description,
            'quantite'=> $request->quantite,
            'prix_unitaire'=> $request->prix_unitaire,
            'date_entre'=> $request->date_entre,
            'date_peremption'=> $request->date_peremption,
        );
    
        Produit::create($form_data);
    
        return redirect()->Route('produit.index');

        // dd($request->all());
    }

    public function edit($id){
        $produit = Produit::find($id);
        return view('pages.ajoutProduit', compact('produit'));
    }

    public function update($id, Request $request ){
        $produit = Produit::find($id);

        $request->validate([
            'libelle'=> 'required',
            'description'=> 'required',
            'quantite'=> 'required',
            'prix_unitaire'=> 'required',
            'date_entre'=> 'required',
            'date_peremption'=> 'required',
        ]);

        $form_data = array(
            'libelle'=> $request->libelle,
            'description'=> $request->description,
            'quantite'=> $request->quantite,
            'prix_unitaire'=> $request->prix_unitaire,
            'date_entre'=> $request->date_entre,
            'date_peremption'=> $request->date_peremption,
        );

        $produit->update($form_data);
    
        return back()->withSuccess("entregistrement réussi");
    }

    public function delete($id){
        $produit = Produit::find($id);
        $produit->delete();
        return back()->withSuccess("suppression réussi");
    }
}

