<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Sidebar & navbar</title>
    </head>
<div class="mbd-global-navbar-sidebar">
    <input type="checkbox" id="check">
    <!--------debut de header------------>
    <header>
        <div class="row mbd-hearder-navbar">
            <div class="col-6">
                <label for="check">
                    <i class="fas fa-bars" id="sidebar_btn"></i>
                </label>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button class="logout" style="background: #7851C8;"> 
                <form method="POST" class="" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Déconnexion') }}
                    </x-dropdown-link>
                </form> 
              </button>
            </div>
        </div>
    </header>
    <!--------fin header------------>

    <!--------sidebar start------------>
    
        <div class="sidebar">
            <center>
                <img src="{{asset('img/logo.png')}}" class="logo" alt="#">
                <hr>
            </center>
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Produit
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('produit.index')}}">Liste des produits</a></li>
                    <li><a class="dropdown-item" href="{{ route('produit.create')}}">Ajouter un produit</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="btn mbd-dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Vente
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('produitVendu.index')}}">Liste des ventes</a></li>
                    <li><a class="dropdown-item" href="{{ route('produitVendu.create')}}">Ajouter une vente</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="btn mbd-dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Client
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('client.index')}}">Liste des clients</a></li>
                    <li><a class="dropdown-item" href="{{ route('client.create')}}">Ajouter un client</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="btn mbd-dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Fournisseur
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('fournisseur.index')}}">Liste des fournisseurs</a></li>
                    <li><a class="dropdown-item" href="{{ route('fournisseur.create')}}">Ajouter un fournisseur</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="btn mbd-dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Commande
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('commande.index')}}">Liste des commandes</a></li>
                    <li><a class="dropdown-item" href="{{ route('commande.create')}}">Ajouter un commmande</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="btn" href="{{route ('facture.index')}}">
                    Facture
                </a>
            </div>
        </div> 
    <!--------sidebar end------------>
</div>
