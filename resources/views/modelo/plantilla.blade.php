<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favico --}}
    <title>@yield('title')</title>
    <style>
        .active{
            color:brown;
            font-weight: bold;
            background-color: beige;
        }
    </style>
</head>
<body>
    @include('modelo.partials.header')

    @yield('content')
    @include('modelo.partials.footer')
</body>
</html>