<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

    @include('layouts.sidebare')
    <h1 class=" p-3 mt-5 text-center">Accueil</h1>
        <div class="container mbd-acueil-container d-flex justify-content-center">
            <div class="my-5 d-flex flex-column">
                <div class="row my-5! w-100" style="margin: 0 auto">
                    <div class="row">
                        <div class="card-body mbd-carte P-3">
                            <div>
                                <span class="iconify" data-icon="ic:outline-production-quantity-limits" style="color: white;" data-width="30" data-height="30"></span>                
                            </div> 
                            <div>
                                <h5 class="card-title"><a href="{{ route('produit.index')}}">Produit</a></h5>
                            </div>
                        </div>
                        <div class=" card-body mbd-carte P-3">
                            <div>
                                <span class="iconify" data-icon="eos-icons:product-classes-outlined" style="color: white;" data-width="30" data-height="30"></span>            
                            </div> 
                            <div>
                                <h5 class="card-title"><a href="{{ route('produitVendu.index')}}">Vente</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body mbd-carte P-3">
                            <div>
                                <span class="iconify" data-icon="emojione-monotone:family-man-man-boy-boy" style="color: white;" data-width="30" data-height="30"></span>
                            </div> 
                            <div>
                                 <h5 class="card-title"><a href="{{ route('client.index')}}">Client</a></h5>
                            </div>
                        </div>
                        <div class="card-body mbd-carte P-3">
                            <div>
                                <span class="iconify" data-icon="emojione-monotone:family-man-man-boy-boy" style="color: white;" data-width="30" data-height="30"></span>
                            </div> 
                            <div>
                                <h5 class="card-title"><a href="{{ route('fournisseur.index')}}">Fournisseur</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body mbd-carte P-3">
                            <div>
                                <span class="iconify" data-icon="icon-park-outline:transaction-order" style="color: white;" data-width="30" data-height="30"></span>
                            </div> 
                            <div>
                                <h5 class="card-title"><a href="{{ route('commande.index')}}">Commande</a></h5>
                            </div>
                        </div>
                        <div class="card-body mbd-carte">
                            <div>
                                <span class="iconify" data-icon="medical-icon:i-billing" style="color: white;" data-width="30" data-height="30"></span>
                            </div> 
                            <div>
                                <h5 class="card-title"><a href="{{ route('facture.index')}}">Facture</a></h5>
                            </div>
                        </div>
                    </div>
    
                </div>        
            </div>
        </div>
