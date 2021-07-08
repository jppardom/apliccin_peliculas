@extends('modelo.plantilla')

@section('title', 'Página de Películas')

@section('content')
@php
if ($categoria == null) {
    echo "<h1> Página de la Pelicula:  $pelicula </h1>";
} else {

    echo "<h1>Bienvenidos a la pelicula: $pelicula, de la categoria $categoria </h1";
}
    
@endphp


@endsection

