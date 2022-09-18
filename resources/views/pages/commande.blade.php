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
                <h1>Liste des Commandes</h1>
            </div>
            <a href="{{ url('facture/pdf')}}" class="boutonImpression">Imprimer</a>
        <div style="overflow-x:auto;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <th>Numéro Commande</th>
                        <th>Description</th>
                        <th>Date Commande</th>
                        <th>Date Livraison</th>
                        <th>fournisseur_id</th>
                    </tr>
                </thead>
                @foreach ($commandes as $commande)
                    <tbody>
                        <tr>
                            <td>{{$commande->numero_commande }}</td>
                            <td>{{$commande->description }}</</td>
                            <td>{{$commande->date_commande }}</</td>
                            <td>{{$commande->date_livraison }}</</td>
                            <td>{{$commande->fournisseur_id }}</</td>
                            <td>
                                <a href="{{ route('fournisseur.edit', $commande->id)}}" id="{{$commande->id}}" type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="20" data-height="20"></span>
                                </a>
                            </td>  
                            <td>
                                <form method="POST" action="{{ route('commande.delete', $commande)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit">
                                        <span class="iconify" data-icon="fluent:delete-16-filled" style="color: #ce0033;" data-width="10" data-height="10"></span>
                                    </button>
                                </form>
                            </td>   
                        </tr>
                    </tbody>
                    @endforeach
            </table>
        </div>    
             {{-- <div class="container mt-3">
                <div class="row" style="width: 15%;">
                    {{ $commandes->links()}}
                </div>
            </div> --}}
        </div>
    </div>  
</div>