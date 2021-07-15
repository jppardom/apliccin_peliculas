@extends('modelo.plantilla')

@section('title', 'Página de Películas')

@section('content')
    <h1>Bienvenidos a la página para crear películas</h1>

    <form action="{{route('peliculas.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
            <br>
            @error('nombre')
                <small>*{{$message}}</small>
            @enderror
            <br>
        </label>
        
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
            <br>
            @error('descripcion')
                <small>*{{$message}}</small>
            @enderror
            <br>
        </label>
        
        <label>
           
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
            <br>
            @error('categoria')
                <small>*{{$message}}</small>
            @enderror
            <br>
        </label>
        
        <button type="submit">Enviar datos</button>
        
        </form>
@endsection


