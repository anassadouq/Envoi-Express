<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'show'])->name('welcome');
Route::get('/qui_sommes_nous', function () {
    return view('qui_sommes_nous');
});

/* Demenagement */
Route::get('/demenagement_particulier', function () {
    return view('demenagement.demenagement_particulier');
});

Route::get('/demenagement_entreprise', function () {
    return view('demenagement.demenagement_entreprise');
});

Route::get('/demenagement_etudiant', function () {
    return view('demenagement.demenagement_etudiant');
});

/* Comment ca marche */
Route::get('/comment_ca_marche', function () {
    return view('comment_ca_marche');
});

Route::get('/nous_contacter', function () {
    return view('nous_contacter');
});

Route::get('/admin', [DemandeController::class, 'index'])->middleware('auth')->name('demande.index');
Route::resource('/demande', DemandeController::class)->except(['index']);

Route::get('/contact', [ContactController::class, 'index'])->middleware('auth')->name('contact.index');
Route::resource('/contact', ContactController::class)->except(['index']);

Auth::routes();
