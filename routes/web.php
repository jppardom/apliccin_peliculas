<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\InformacionControllers;
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

Route::get('/', HomeControler::class)->name('home');

Route::resource('peliculas', PeliculasController::class);

Route::view('contactos', 'contactos')->name('contactos');

Route::get('informacion', [InformacionControllers::class, 'index'])->name('informacion.index');

Route::post('informacion', [InformacionControllers::class, 'store'])->name('informacion.store');

// Route::get('peliculas', [PeliculasController::class, 'index'])->name('peliculas.index');
// Route::get('peliculas/create', [PeliculasController::class, 'create'])->name('peliculas.create');
// Route::post('peliculas', [PeliculasController::class, 'store'])->name('peliculas.store');
// Route::get('peliculas/{pelicula}', [PeliculasController::class, 'show'])->name('peliculas.show');
// Route::get('peliculas/{pelicula}/edit', [PeliculasController::class, 'edit'])->name('peliculas.edit');
// Route::put('peliculas/{pelicula}', [PeliculasController::class, 'update'])->name('peliculas.update');
// Route::delete('peliculas/{pelicula}', [PeliculasController::class, 'destroy'])->name('peliculas.destroy');

