<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>

    <div class="row mbd-listeVente my-5">
            <div class="mbd-tableau my-5">
                <div class="text-center">
                    <h1>Liste des ventes</h1>
                </div>
            <div style="overflow-x:auto;"> 
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th  scope="col">ID</th>
                            <th  scope="col">Libelle</th>
                             <th  scope="col">Quantite</th>
                            <th  scope="col">Prenom</th>                         
                            <th  scope="col">Nom</th>
                        </tr>
                    </thead>
                     @foreach ($produitVendus as $produitVendu)
                                
                    <tbody>
                    <tr>
                        <td>{{$produitVendu->id }}</td>
                        <td>{{$produitVendu->produit->libelle }}</td>                       
                        <td>{{$produitVendu->quantite }}</td>
                        <td>{{$produitVendu->client->prenom }}</td>
                        <td>{{$produitVendu->client->nom }}</td>
                              <td>
                            <a href="{{ route('produitVendu.edit', $produitVendu->id)}}" id="{{$produitVendu->id}}" type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="30" data-height="30"></span>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('produitVendu.delete', $produitVendu)}}">
                                @csrf
                                @method("DELETE")
                                <button type="submit">
                                    <span class="iconify" data-icon="fluent:delete-16-filled" style="color: #ce0033;" data-width="30" data-height="30"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                    </tbody>
                   @endforeach
                </table>
            </div>
                  {{-- <div class="container mt-3">
                        <div class="row" style="width: 15%;">
                            {{ $produitVendus->links()}}
                        </div>
            </div>   --}}
    
            </div>
        </div>
    </div>
</div>


{{-- Modale form update --}}

    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier une vente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    <div class="modal-body " style="background:#8551C8;">
    <div class="content">
        <div class="row formulairedajout">
            <form method="POST" action="{{ route('produitVendu.update', $produitVendu->id)}}" enctype="multipart/form-data" class="w-50">
                @method("PUT")
                @csrf
                  
                <!-- libelle -->
                <div>
                    <x-input id="name" class="block mt-1 w-full form-control" type="text" name="libelle" :value="old('libelle')" placeholder="Libelle" required autofocus />
                </div>

                <!-- Quantite -->
                <div class="mt-4">
                    <x-input id="quantite" class="block mt-1 w-full form-control" type="quantite" name="quantite" :value="old('quantite')" placeholder="Quantite" required />
                </div>

                  <!-- Nom -->
                <div class="mt-4">
                    <x-input id="nom" class="block mt-1 w-full form-control" type="nom" name="nom" :value="old('nom')" placeholder="Nom" required />
                </div>

                   <!-- Prenom -->
                <div class="mt-4">
                    <x-input id="prenom" class="block mt-1 w-full form-control" type="prenom" name="prenom" :value="old('prenom')" placeholder="Prenom" required />
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <button type="submit" class="btn bg-white">Enregistrer</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn bg-white" data-bs-dismiss="modal">Fermer</button>
                    </div>
                 
                </div>
                
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>
