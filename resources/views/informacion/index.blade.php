@extends('modelo.plantilla')

@section('title', 'Página de Información')

@section('content')
    <h1>Dejar Información</h1>

    <form action="{{route('informacion.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>

        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>
        <label>
            Mejase:
            <br>
            <textarea name="mensaje" rows="5"></textarea>
        </label>
        <br>
        <button type="submit">Enviar Mensaje</button>
    </form>
@endsection