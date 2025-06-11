<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/qui_sommes_nous', function () {
    return view('qui_sommes_nous');
})->name('qui_sommes_nous');

Route::get('/comment_ca_mache', function () {
    return view('comment_ca_mache');
})->name('comment_ca_mache');

Route::get('/nous_contacter', function () {
    return view('nous_contacter');
})->name('nous_contacter');

Route::get('/admin', [ContactController::class, 'index'])->middleware('auth')->name('contact.index');
Route::resource('/contact', ContactController::class)->except(['index']);

Auth::routes();
