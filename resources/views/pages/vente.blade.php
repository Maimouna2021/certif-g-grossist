<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/vente.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>

        <div class="container p-5">
            <div class="row text-center">
                <h4>Liste des produits</h4>
            </div>
        <form method="POST" action="{{ url('produitVendu/store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-6 p-3">
            <select class="form-control" name="produit_id" aria-label="liste des produits">
                <option selected>Sélectionner un produit </option>
                @foreach ($produits as $produit)
                <option value="{{ $produit->id }}">{{ $produit->libelle }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-6 p-3">
            
            </div>
            <div class="row">                  
            <div class="col-6 p-3">
                <select class="form-control mb-3"  name="client_id" aria-label="list des clients">
                <option selected>Sélectionner un client </option>
                @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->prenom }} {{ $client->nom }}</option>
                @endforeach
                </select>
            </div>
            <div class="col-6 p-3"><input type="text" class="form-control" name="quantite" required placeholder="Quantite"></div>
        </div>
        <div class="d-flex justify-content-end p-3">
            <button type="submit" class="btn btn-primary boutonImprimer" value="Imprimer">Ajouter</button>
        </div>
        </form>
</div>   
   
   
   
   
   
   
   
