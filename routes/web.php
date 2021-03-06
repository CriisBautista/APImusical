<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [apiController::class, 'artistas'])->name('inicio.artistas');
Route::get('/artista/{id}', [apiController::class, 'vistaArtista'])->name('ver.artista');
Route::get('/canciones', [apiController::class, 'canciones'])->name('ver.cancion');
Route::get('/letras', [apiController::class, 'letras'])->name('ver.letra');







