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
                <div class="text-center">
                    <h1>Liste des factures</h1>
                </div>
        </div>
    </div>
    <div class="row">
        @foreach ($factures as $facture)
        <div class="col mb-1 facture">
            <div class="card border-success mb-1" style="width: 20rem; ">
                <div class="card-header text-center bg-transparent border-success">N° Facture: {{$facture->numero_commande}}</div>
                <div class="card-body text-success">
                  <h5 class="card-title text-center">{{$facture->fournisseur->prenom }} {{$facture->fournisseur->nom }} {{$facture->fournisseur->tel }}</h5>
                  <p class="card-text text-center">{{$facture->description }}.</p>
                </div>
                <div class="card-footer bg-transparent border-success"> Date de commande : {{$facture->date_commande }} Date de livraison : {{$facture->date_livraison }}</div>
            </div>
        </div>
        @endforeach
    </div>

      
        
{{--         
         <div class="row">
            <div class="col">
                <p>Numero Commande</p>
           </div>

            <div class="col">
                <p>{{$form_data["numero_commande"]}}</p>
            </div>
            <div class="row">
                <div class="col">
                    <p>Description</p>
                </div>
                <div class="col">
                    <p>{{$form_data["description"]}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Date Commande</p>
                </div>
                <div class="col">
                    <p>{{$form_data["date_commande"]}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Date Livraison</p>
                </div>
                <div class="col">
                    <p>{{$form_data["date_livraison"]}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Fournisseur prenom fournisseur</p>
                    <p>Fournisseur nom fournisseur</p>
                </div>
                <div class="col">
                    <p>{{$fournisseur->prenom}}</p>
                    <p>{{$fournisseur->nom}}</p>
                </div>
            </div> --}}
        {{-- </div> --}}

</div>

