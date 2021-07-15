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
            <input type="text" name= "nombre" value="{{old('nombre', $pelicula->nombre)}}">
            <br>
            @error('nombre')
                <small>*{{$message}}</small>
            @enderror
            <br>
        </label>
        
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $pelicula->descripcion)}}</textarea>
            <br>
            @error('descripcion')
                <small>*{{$message}}</small>
            @enderror
            <br>
        </label>
        
        <label>
           
            Categoria:
            <br>
            <input type="text" name="categoria" value ="{{old('categoria', $pelicula->categoria)}}">
            <br>
            @error('categoria')
                <small>*{{$message}}</small>
            @enderror
            <br>
        </label>
        
        <button type="submit">actualizar datos</button>
        
        </form>
@endsection
