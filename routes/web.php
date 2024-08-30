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

Route::get('Login', function () {
    return view('Login');
});

Route::get('Inscription', function () {
    return view('Inscription');
});

Route::get('Accueil', function () {
    return view('Accueil');
});

Route::get('Guide', function () {
    return view('Guide');
});

