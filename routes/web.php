<?php

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

// il codice restituisce una vista 
Route::get('/', function () {

    // passare dati tramite array associativo
    $dati = config("data.home");

    return view('home', $dati);
})->name("home");

// definisco la rotta  laravel 
Route::get('/about-us', function () {
    return view('about', config("data.about"));
})->name("informazioni");

// view, prende il contenuto della stringa e rimette a schermo
