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

/* objets_plus_envoyes */
Route::get('/transport_meubles', function () {
    return view('objets_plus_envoyes.transport_meubles');
});
Route::get('/transport_electromenager', function () {
    return view('objets_plus_envoyes.transport_electromenager');
});
Route::get('/materiel_high_tech', function () {
    return view('objets_plus_envoyes.materiel_high_tech');
});
Route::get('/materiel_de_bricolage', function () {
    return view('objets_plus_envoyes.materiel_de_bricolage');
});
Route::get('/livraison_de_colis', function () {
    return view('objets_plus_envoyes.livraison_de_colis');
});
Route::get('/transport_de_marchandises', function () {
    return view('objets_plus_envoyes.transport_de_marchandises');
});
Route::get('/livraison_velo', function () {
    return view('objets_plus_envoyes.livraison_velo');
});
Route::get('/livraison_buffet', function () {
    return view('objets_plus_envoyes.livraison_buffet');
});
Route::get('/livraison_pièces_auto', function () {
    return view('objets_plus_envoyes.livraison_pièces_auto');
});
Route::get('/transport_lave_vaisselle', function () {
    return view('objets_plus_envoyes.transport_lave_vaisselle');
});
Route::get('/transport_lave_linge', function () {
    return view('objets_plus_envoyes.transport_lave_linge');
});
Route::get('/livraison_canape', function () {
    return view('objets_plus_envoyes.livraison_canape');
});

/* Villes */
Route::get('/Déménagement_Rabat', function () {
    return view('villes.rabat');
});
Route::get('/Déménagement_Tanger', function () {
    return view('villes.tanger');
});
Route::get('/Déménagement_Marrakech', function () {
    return view('villes.marrakech');
});
Route::get('/Déménagement_Casablanca', function () {
    return view('villes.casablanca');
});
Route::get('/Déménagement_Essaouira', function () {
    return view('villes.essaouira');
});
Route::get('/Déménagement_Nador', function () {
    return view('villes.nador');
});
Route::get('/Déménagement_Agadir', function () {
    return view('villes.agadir');
});
Route::get('/Déménagement_Laayoune', function () {
    return view('villes.laayoune');
});


Route::get('/admin', [DemandeController::class, 'index'])->middleware('auth')->name('demande.index');
Route::resource('/demande', DemandeController::class)->except(['index']);

Route::get('/contact', [ContactController::class, 'index'])->middleware('auth')->name('contact.index');
Route::resource('/contact', ContactController::class)->except(['index']);

Auth::routes();
