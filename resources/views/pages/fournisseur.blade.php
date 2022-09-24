<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container ">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>

    <div class="row client my-5">
        <div class="row text-center p-5">
            <h1>Liste des fournisseurs</h1>
        </div>
                    <div class="mbd-tableau my-3">
                    <div style="overflow-x:auto;">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th  scope="col">ID</th>
                                    <th  scope="col">Prenom</th>
                                    <th  scope="col">Nom</th>
                                    <th  scope="col">Téléphone</th>
                                    <th  scope="col">Adresse</th>
                                </tr>
                            </thead>
                                @foreach ($fournisseurs as $fournisseur)   
                                <tbody>
                                    <tr>
                                        <td>{{$fournisseur->id }}</td>
                                        <td>{{$fournisseur->prenom }}</td>
                                        <td>{{$fournisseur->nom }}</td>
                                        <td>{{$fournisseur->tel }}</td>
                                        <td>{{$fournisseur->adresse }}</td>
                                        <td>
                                            <a href="{{ route('fournisseur.edit', $fournisseur->id)}}" id="{{$fournisseur->id}}" type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="30" data-height="30"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('fournisseur.delete', $fournisseur)}}">
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
                        <div class="container mt-3">
                            <div class="row" style="class" width: 100%;>
                                {{ $fournisseurs->links()}}
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
                <h5 class="modal-title" id="exampleModalLabel">Modifier un fournisseur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    <div class="modal-body " style="background:#8551C8;">
    <div class="content">
        <div class="row formulairedajout">
            <form method="POST" action="{{ route('fournisseur.update', $fournisseur->id)}}" enctype="multipart/form-data" class="w-50">
                @method("PUT")
                @csrf
                                        
                <!-- Prenom -->
                <div>
                    <x-input id="prenom" class="block mt-1 w-full form-control" type="text" name="prenom" :value="old('prenom')" placeholder="Prenom" required autofocus />
                </div>
                <!-- Nom -->
                <div class="mt-4">
                    <x-input id="nom" class="block mt-1 w-full form-control" type="nom" name="nom" :value="old('nom')" placeholder="Nom" required />
                </div>
                <!-- Téléphone -->
                <div class="mt-4">
                    <x-input id="tel" class="block mt-1 w-full form-control" type="tel" name="tel" :value="old('tel')" placeholder="Telephone" required />
                </div>
                <!-- Adresse -->
                <div class="mt-4">
                    <x-input id="adresse" class="block mt-1 w-full form-control" type="adresse" name="adresse" :value="old('adresse')" placeholder="Adresse" required />
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
