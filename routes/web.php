<?php

use App\Http\Controllers\Articulo02Controller;
use App\Http\Controllers\Articulo03Controller;
use App\Http\Controllers\ChequeoCuadreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('articulo.creaarticulo',  [Articulo02Controller::class, 'index'])->name('articulo.creaarticulo.index');
Route::post('articulo.creaarticulo', [Articulo02Controller::class, 'store'])->name('articulo.creaarticulo.store');

Route::get('articulo.consultaprecio', [Articulo03Controller::class, 'index'])->name('articulo.consultaprecio.index');
Route::get('articulo.muestraprecio', [Articulo03Controller::class,  'show'])->name('articulo.muestraprecio.show');

Route::resource('chequeocuadres', ChequeocuadreController::class)->names('chequeocuadres');
