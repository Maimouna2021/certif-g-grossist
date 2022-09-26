<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    // fonction qui nous permet de lister les produits
    public function index (){
        $fournisseurs = Fournisseur::paginate(2);
        return view('pages.fournisseur', [
            'fournisseurs'=>$fournisseurs
        ]);
    }

    // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        $fournisseurs = Fournisseur::All();
        return view('pages.ajoutFournisseur',[
            'fournisseurs'=>$fournisseurs
        ]);
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){
        $request->validate([
                    'nom'=> 'required',
                    'prenom'=> 'required',
                    'tel'=> 'required',
                    'adresse'=> 'required',
        ]);
    
        $form_data = array(
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'tel'=> $request->tel,
            'adresse'=> $request->adresse,
        );
    
        Fournisseur::create($form_data);
    
        return redirect()->Route('fournisseur.index');
    } 

     
    public function edit($id){
        $fournisseur = Fournisseur::find($id);
        return view('pages.ajoutFournisseur', compact('fournisseur'));
    }

    public function update($id, Request $request ){
        $fournisseur = Fournisseur::find($id);

        $request->validate([
            'prenom'=> 'required',
            'nom'=> 'required',
            'tel'=> 'required',
            'adresse'=> 'required',
        ]);

        $form_data = array(
            'prenom'=> $request->prenom,
            'nom'=> $request->nom,
            'tel'=> $request->adresse,
            'adresse'=> $request->adresse,
           
        );

        $fournisseur->update($form_data);
    
        return back()->withSuccess("entregistrement réussi");
    }
  
    public function delete($id){
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();
        return back()->withSuccess("suppression réussi");
    }
}

