<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>
    <div class="row mbd-liste-produit my-5 ">      
        <div class="mbd-tableau my-5" >
        <div class="text-center">
            <h1>Liste des produits</h1>
        </div>
    <div style="overflow-x:auto;">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th  scope="col">ID</th>
                    <th  scope="col">Libelle</th>
                    <th  scope="col">Description</th>
                    <th  scope="col">Quantite</th>
                    <th  scope="col">Prix Unitaire</th>
                    <th  scope="col">Date Entrée</th>
                    <th  scope="col">Date Peremption</th>
                </tr>
            </thead>
            @foreach ($produits as $produit)       
            <tbody>
                <tr>
                    <td>{{$produit->id }}</td>
                    <td>{{$produit->libelle }}</td>
                    <td>{{$produit->description }}</td>
                    <td>{{$produit->quantite }}</td>
                    <td>{{$produit->prix_unitaire }}</td>
                    <td>{{$produit->date_entre }}</td>
                    <td>{{$produit->date_peremption }}</td>
                    <td>
                        <a href="{{ route('produit.edit', $produit->id)}}" id="{{$produit->id}}" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="30" data-height="30"></span>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('produit.delete', $produit)}}">
                            @csrf
                            @method("DELETE")
                            <button type="submit">
                                <span class="iconify" data-icon="fluent:delete-16-filled" style="color: #ce0033;" data-width="30" data-height="30"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>
            {{ $produits->links() }}
            </div>
        </div>
    </div>

</div>


{{-- Modale form update --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier un produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="container p-5">
            <div class="row p-5 bg-white formulairedajout">
                 <form method="POST" action="{{ route('produit.update', $produit->id)}}" enctype="multipart/form-data" class="w-50">
                @method("PUT")
                @csrf

                <!-- libelle -->
                <div>
                    <x-input id="name" class="block mt-1 w-full form-control" type="text" name="libelle" :value="old('libelle')" placeholder="libelle" required autofocus />
                </div>

                <!-- description -->
                <div class="mt-4">
                    <x-input id="description" class="block mt-1 w-full form-control" type="description" name="description" :value="old('description')" placeholder="description" required />
                </div>

                  <!-- prix_unitaire -->
                <div class="mt-4">
                    <x-input id="prix_unitaire" class="block mt-1 w-full form-control" type="prix_unitaire" name="prix_unitaire" placeholder="prix_unitaire" required />
                </div>

                   <!-- quantite -->
                <div class="mt-4">
                    <x-input id="quantite" class="block mt-1 w-full form-control" type="quantite" name="quantite" placeholder="quantite" required />
                </div>

                   <!-- date_entre -->
                <div class="mt-4">
                    <x-input id="date_entre" class="block mt-1 w-full form-control" type="date" name="date_entre" placeholder="date_entre" required />
                </div>
                    <!-- date_peremption -->
                <div class="mt-4">
                    <x-input id="date_peremption" class="block mt-1 w-full form-control" type="date" name="date_peremption" placeholder="date_peremption" required />
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



             


