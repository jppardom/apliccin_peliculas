@extends('modelo.plantilla')

@section('title', 'Página de Películas')

@section('content')
    <h1>Bienvenidos a la página de películas</h1>
    <a href={{route('peliculas.create')}}>Crear Pelicula</a>
    <ul>
        @foreach ($peliculas as $pelicula)
            <li>
                <a href={{route('peliculas.show', $pelicula)}}>{{$pelicula->nombre}}</a>
                <br>
                
            </li>            
        @endforeach
    </ul>
    {{$peliculas->links()}}
@endsection