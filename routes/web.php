<?php

use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/Produits', [ProduitController::class,'index'])->name('Produits.index');
Route::get('/Produits/create',[ProduitController::class,"create"])->name('Produits.create');
Route::Post('/Produits',[ProduitController::class,'store'])->name('Produits.store');
Route::delete('/Produits/{id}',[ProduitController::class,'destroy'])->name('Produits.destroy');
Route::get('/Produits/{id}/edit',[ProduitController::class,'edit'])->name('Produits.edit');
Route::put('/Produits/{id}', [ProduitController::class, 'update'])->name('Produits.update');
Route::get('/Familles',[FamilleController::class,'index'])->name('Familles.index');
Route::get('/Familles/create',[FamilleController::class,'create'])->name('Familles.create');
Route::post('/Familles',[FamilleController::class,'store'])->name('Familles.store');
Route::delete('/Famille/{id}',[FamilleController::class,"destroy"])->name("Familles.destroy");

