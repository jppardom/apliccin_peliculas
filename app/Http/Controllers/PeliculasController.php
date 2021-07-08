<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::paginate();
        return view('peliculas.index',compact('peliculas'));
    }

    public function create(){
        return view('peliculas.create');
    }

    public function show($pelicula, $categoria=null){
        //return view('peliculas.show', ['pelicula' => $pelicula, 'categoria'=>$categoria]);
        return view('peliculas.show', compact('pelicula', 'categoria'));
    }
}
