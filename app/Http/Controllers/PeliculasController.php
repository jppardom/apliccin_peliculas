<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use App\Http\Requests\RequestPeliculas;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::OrderBy('id', 'desc')->paginate();
        return view('peliculas.index',compact('peliculas'));
    }

    public function create(){
        return view('peliculas.create');
    }

    public function store(RequestPeliculas $request){

        $pelicula = Pelicula::create($request->all());
        return redirect()->route('peliculas.show', $pelicula);
    }

    public function show(Pelicula $pelicula){
        return view('peliculas.show', compact('pelicula'));
    }

    public function edit(Pelicula $pelicula){
        return view('peliculas.edit', compact('pelicula'));
    }

    public function update (RequestPeliculas $request, Pelicula $pelicula){
        $pelicula->update($request->all());
        return redirect()->route('peliculas.show', $pelicula);
    }

    public function destroy(Pelicula $pelicula){
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }
}
