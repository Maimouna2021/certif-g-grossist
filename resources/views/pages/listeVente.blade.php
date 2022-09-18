<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>

    <div class="row listeVente my-5 p-5">
            <div class="col-10 tableau">
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
                                <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="40" data-height="50"></span>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('produitVendu.delete', $produitVendu)}}">
                                @csrf
                                @method("DELETE")
                                <button type="submit">
                                    <span class="iconify" data-icon="fluent:delete-16-filled" style="color: #ce0033;" data-width="40" data-height="50"></span>
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
         <div class="d-flex justify-content-end p-3">
            <button type="submit" class="btn boutonretour" value="retour">Retour</button>
        </div>
            </div>
        </div>
    </div>
</div>


{{-- Modale form update --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="container p-5">
                <div class="row p-5 bg-white formulairedajout">
             <form method="POST" action="{{ route('produitVendu.update', $produitVendu->id)}}" enctype="multipart/form-data" class="w-50">
                 @method("PUT")
                @csrf
                <!-- libelle -->
                <div>
                    <x-input id="name" class="block mt-1 w-full form-control" type="text" name="libelle" :value="old('libelle')" placeholder="libelle" required autofocus />
                </div>

                <!-- Quantite -->
                <div class="mt-4">
                    <x-input id="quantite" class="block mt-1 w-full form-control" type="quantite" name="quantite" :value="old('quantite')" placeholder="quantite" required />
                </div>

                  <!-- Nom -->
                <div class="mt-4">
                    <x-input id="nom" class="block mt-1 w-full form-control" type="nom" name="nom" :value="old('nom')" placeholder="nom" required />
                </div>

                   <!-- Prenom -->
                <div class="mt-4">
                    <x-input id="prenom" class="block mt-1 w-full form-control" type="prenom" name="prenom" :value="old('prenom')" placeholder="prenom" required />
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </div>
        </form>
        </div>
      </div>
     
    </div>
  </div>
</div>