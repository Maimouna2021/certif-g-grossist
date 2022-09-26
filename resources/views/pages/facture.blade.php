<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>

    <div class="acueil-content">
        <div class="row mbd-liste-produit my-5">    
                <div class="text-center p-3">
                    <h1>Liste des factures</h1>
                </div>
        </div>
    </div>
    <div class="row row-cols-3">
        @foreach ($factures as $facture)
        <div class="col mb-1 facture ">
            <div class="card mb-1" style="width: 17rem;">
                <div class="card-header text-center" style="background: #7851C8">N° Facture: {{$facture->numero_commande}}</div>
                <div class="card-body ">
                  <h5 class="card-title">{{$facture->fournisseur->prenom }} {{$facture->fournisseur->nom }} {{$facture->fournisseur->tel }}</h5>
                  <p class="card-text text-center">{{$facture->description }}.</p>
                </div>
                <div class="card-footerX"> Date de commande : {{$facture->date_commande }} Date de livraison : {{$facture->date_livraison }}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>

