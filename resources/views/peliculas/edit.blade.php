@extends('modelo.plantilla')

@section('title', 'Página de Películas')

@section('content')
    <h1>Bienvenidos a la página de edición películas</h1>

    <form action="{{route('peliculas.update', $pelicula)}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <br>
            <input type="text" name= "name" value="{{$pelicula->nombre}}">
            <br>
        </label>
        
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{$pelicula->descripcion}}</textarea>
            <br>
        </label>
        
        <label>
           
            Categoria:
            <br>
            <input type="text" name="categoria" value ="{{$pelicula->descripcion}}">
            <br>
        </label>
        
        <button type="submit">actualizar datos</button>
        
        </form>
@endsection
