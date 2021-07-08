<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\PeliculasController;

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

Route::get('/', HomeControler::class);

Route::get('peliculas', [PeliculasController::class, 'index'])->name('peliculas.index');

Route::get('peliculas/create', [PeliculasController::class, 'create'])->name('peliculas.create');

Route::get('peliculas/{pelicula}', [PeliculasController::class, 'show'])->name('peliculas.show');


