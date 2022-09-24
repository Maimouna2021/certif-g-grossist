<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>
    <div class="row commande my-5">
        <div class="col-10 tableau">
            <div class="row text-center my-5">
                <h1>Liste des commandes</h1>
            </div>
        
        <div style="overflow-x:auto;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
        
                        <th>Commande n°</th>
                        <th>Description</th>
                        <th>Date commandée</th>
                        <th>Date de livaison</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Telephone</th>

                    </tr>
                </thead>
                @foreach ($commandes as $commande)
                    <tbody>
                        <tr>
                            <td>{{$commande->numero_commande }}</td>
                            <td>{{$commande->description }}</</td>
                            <td>{{$commande->date_commande }}</</td>
                            <td>{{$commande->date_livraison }}</</td>
                            <td>{{$commande->fournisseur->prenom }}</</td>
                            <td>{{$commande->fournisseur->nom }}</</td>
                            <td>{{$commande->fournisseur->tel }}</</td>
                            <td>
                                <a href="{{ route('commande.edit', $commande->id)}}" id="{{$commande->id}}" type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="30" data-height="30"></span>
                                </a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('commande.delete', $commande)}}">
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
        </div>    
             {{-- <div class="container mt-3">
                <div class="row" style="width: 3%;">
                    {{ $commandes->links()}}
                </div>
            </div> --}}
        </div>
    </div>  
</div>

   
    {{-- Modale form update --}}
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier une commande</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        <div class="modal-body " style="background:#8551C8;">
        <div class="content">
            <div class="row formulairedajout">
                <form method="POST" action="{{ route('commande.update', $commande->id)}}" enctype="multipart/form-data" class="w-50">
                    @method("PUT")
                    @csrf
                                            
                    <!-- Numero Commande  -->
                    <div>
                        <x-input id="numero_commande " class="block mt-1 w-full form-control" type="text" name="numero_commande " placeholder="Numero Commande " required/>
                    </div>
                    <!-- Description -->
                    <div class="mt-4">
                        <x-input id="description" class="block mt-1 w-full form-control" type="description" name="description" placeholder="Description" required />
                    </div>
                    <!-- Date Commande  -->
                    <div class="mt-4">
                        <x-input id="date_commande " class="block mt-1 w-full form-control" type="date" placeholder="date_commande " required />
                    </div>
                    <!-- Date livraison -->
                    <div class="mt-4">
                        <x-input id="date_livraison" class="block mt-1 w-full form-control" type="date" name="date_livraison" placeholder="date_livraison" required />
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
    