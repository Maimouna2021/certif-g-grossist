<?php

namespace App\Http\Controllers;
use App\Models\Client;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    // fonction qui nous permet de lister les clients
    public function index (){
        $clients = Client::paginate(2);
        return view('pages.client', [
            'clients'=>$clients
        ]);
    }

    // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        $clients = Client::All();
        return view('pages.ajoutClient',[
            'clients'=>$clients
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
    
        Client::create($form_data);
    
        return redirect()->Route('client.index');
    } 

    
    public function edit($id){
        $client = Client::find($id);
        return view('pages.ajoutClient', compact('client'));
    }

    public function update($id, Request $request ){
        $client = Client::find($id);

        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'tel'=> 'required',
            'adresse'=> 'required',
        ]);

        $form_data = array(
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'tel'=> $request->adresse,
            'adresse'=> $request->adresse,
           
        );

        $client->update($form_data);
    
        return back()->withSuccess("entregistrement réussi");
    }

    public function delete($id){
        $client = Client::find($id);
        $client->delete();
        return back()->withSuccess("suppression réussi");
    }
}
