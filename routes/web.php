<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', [ContactController::class, 'index'])->middleware('auth')->name('contact.index');
Route::resource('/contact', ContactController::class)->except(['index']);

Auth::routes();
