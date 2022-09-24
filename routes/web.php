<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProduitVenduController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('auth.login');
});


Route::middleware(['auth'])->group(function () {
    
// Route pour les produits
Route::get('/produit', [ProduitController::class, 'index'])->name('produit.index'); 
Route::get('/produit/ajout', [ProduitController::class, 'create'])->name('produit.create');
Route::post('/produit/store', [ProduitController::class, 'store'])->name('produit.store');
Route::put('/produit/update/{id}', [ProduitController::class, 'update'])->name('produit.update');
Route::get('/produit/edit/{id}', [ProduitController::class, 'edit'])->name('produit.edit');
Route::delete('/produit/delete/{id}', [ProduitController::class, 'delete'])->name('produit.delete');
Route::get('/produit/list', [ProduitController::class, 'show'])->name('produit.show');
Route::get('/produit/pdf', [ProduitController::class, 'createPDF']);


// Route pour les clients
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/ajout', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::delete('/client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');

// Route pour les fournisseurs
Route::get('/fournisseur', [FournisseurController::class, 'index'])->name('fournisseur.index');
Route::get('/fournisseur/ajout', [FournisseurController::class, 'create'])->name('fournisseur.create');
Route::post('/fournisseur/store', [FournisseurController::class, 'store'])->name('fournisseur.store');
Route::put('/fournisseur/update/{id}', [FournisseurController::class, 'update'])->name('fournisseur.update');
Route::get('/fournisseur/edit/{id}', [FournisseurController::class, 'edit'])->name('fournisseur.edit');
Route::delete('/fournisseur/delete/{id}', [FournisseurController::class, 'delete'])->name('fournisseur.delete');

// Route pour les produitVendus
Route::get('/produitVendu', [ProduitVenduController::class, 'index'])->name('produitVendu.index');
Route::get('/produitVendu/ajout', [ProduitVenduController::class, 'create'])->name('produitVendu.create');
Route::post('/produitVendu/store', [ProduitVenduController::class, 'store'])->name('produitVendu.store');
Route::put('/produitVendu/update/{id}', [ProduitVenduController::class, 'update'])->name('produitVendu.update');
Route::get('/produitVeendu/edit/{id}', [ProduitVenduController::class, 'edit'])->name('produitVendu.edit');
Route::delete('/produitVendu/delete/{id}', [ProduitVenduController::class, 'delete'])->name('produitVendu.delete');

// Route pour les commandes
Route::get('/commande', [CommandeController::class, 'index'])->name('commande.index');
Route::get('/commande/ajout', [CommandeController::class, 'create'])->name('commande.create');
Route::post('/commande/store', [CommandeController::class, 'store'])->name('commande.store');
Route::put('/commande/update/{id}', [CommandeController::class, 'update'])->name('commande.update');
Route::get('/commande/edit/{id}', [CommandeController::class, 'edit'])->name('commande.edit');
Route::delete('/commande/delete/{id}', [CommandeController::class, 'delete'])->name('commande.delete');

// Route pour les factures
Route::get('/facture', [FactureController::class, 'index'])->name('facture.index');
Route::get('/facture/ajout', [FactureController::class, 'create'])->name('facture.create');
Route::post('/facture/store', [FactureController::class, 'store'])->name('facture.store');
Route::put('/facture/update/{id}', [FactureController::class, 'update'])->name('facture.update');
Route::get('/facture/edit/{id}', [FactureController::class, 'edit'])->name('facture.edit');
Route::delete('/facture/delete/{id}', [FactureController::class, 'delete'])->name('facture.delete');
   
});

Route::get('/dashboard', function () {
    return view('pages.accueil');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
