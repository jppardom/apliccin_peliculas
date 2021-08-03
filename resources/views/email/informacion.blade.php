<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo Electrónico</title>
</head>
<body>
    <h1>Bienvenido a Laravel </h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis temporibus dolore, natus aliquid eius soluta vero ipsam, obcaecati qui consequuntur nostrum! Nulla ab, modi amet quos ut a. Odio, consequuntur.</p>

    <p><strong>Nombre: </strong>{{$contacto['nombre']}}</p>
    <p><strong>Correo: </strong>{{$contacto['correo']}}</p>
    <p><strong>Mensaje: </strong>{{$contacto['mensaje']}}</p>
    
</body>
</html>