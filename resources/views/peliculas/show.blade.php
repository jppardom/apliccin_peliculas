@extends('modelo.plantilla')

@section('title', 'Página de Películas'. $pelicula->nombre)

@section('content')

    <h1>Bienvenido a la película: {{$pelicula->nombre}}</h1>
    <a href={{route('peliculas.index')}}>Volver al inicio</a>
    <p><strong>Categoria: </strong>{{$pelicula->categoria}}</p>
    <p><strong>Descripcion: </strong></p>
    <p>{{$pelicula->descripcion}}</p>
@endsection

