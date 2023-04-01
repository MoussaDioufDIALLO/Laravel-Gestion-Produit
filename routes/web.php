<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;


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
    return view('welcome');
});
Route::get('/', [ProduitController::class, 'index']);
Route::get('/produit/{id}', [ProduitController::class, 'view'])->name('produit.view');
Route::post('/produit/add', [ProduitController::class, 'add']);
Route::get('/produit/add', [ProduitController::class, 'add']);
Route::post('/add', [ProduitController::class, 'add'])->name('add');
Route::get('/getOne/{id}', [ProduitController::class, 'getOne'])->name('getOne');
Route::get('/ajout-produit', [ProduitController::class, 'create'])->name('ajouter-produit');
Route::get('/produits', [ProduitController::class, 'index'])->name('produit.index');
Route::delete('/produits/{id}', [ProduitController::class, 'supprimer'])->name('produit.supprimer');
Route::get('/produits/{id}/modifier', [ProduitController::class, 'modifier'])->name('produit.modifier');
Route::put('/produits/{id}', [ProduitController::class, 'update'])->name('produit.update');
Route::post('/produits/rechercher', [ProduitController::class, 'rechercher'])->name('produit.rechercher');






