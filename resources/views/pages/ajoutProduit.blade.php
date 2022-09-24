<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>    
</div>

<div class="container mt-5 p-5">
    <div class="card">
        <div class="card-header text-whith" style=" background: #8551C8;">
           <h3 style="text-align:center; color:white">Ajouter un produit</h3>
        </div>
    <div class="card-body">
        <form method="POST"  action="{{ url('produit/store')}}" enctype="multipart/form-data" class="w-100">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Libelle</label>
                    <input type="text" class="form-control" name="libelle" placeholder="Libelle" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label> Quantite</label>
                    <input type="text" class="form-control" name="quantite" placeholder=" Quantite" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Prix Unitaire</label>
                    <input type="text" class="form-control" name="prix_unitaire" placeholder="Prix Unitaire" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Date Entrée</label>
                    <input type="date" class="form-control" name="date_entre" placeholder="Date Entrée" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Date Peremption</label>
                    <input type="date" class="form-control" name="date_peremption" placeholder="Date Peremption" required>
                </div>
                <div class="text-right">
                    <button href="{{ route('produit.index')}}" class="btn" style=" background: #790FFF; color: white;">
                        Enregistrer
                    </button>
                    <button href="{{ route('produit.create')}}" class="btn" style=" background: #790FFF; color: white;">
                        Annuler
                    </button>
                </div>
            </div>
        </form>
    </div>                
</div>

