<!DOCTYPE html>
<html lang="es">
<head>


    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="robots" content="index,follow" />
    <meta name="google" content="notranslate" />
    <meta name="description" content="TConecta - Internet inalambrico de 20 megas simétrico" />
    <meta name="keywords" content="intenert, inalambrico, simetrico, rapido, veloz conexion, electricidad, interconexión"/>
    <meta name="title" content="{{ config('app.name') }} - @yield('title')" />
    <meta name="language" content="es" />
    <meta name="revisit-after" content="1 week" />
    <meta name="rating" content="General" />
    <meta name="author" content="La Machine" />
    <meta name="owner" content="Tconecta" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#f15c22">
    <link rel="shortcut icon" href="{{ asset('images/isotipo-logo.png') }}">


    @yield('head')

</head>
<body>

    @include('layouts.header')

    @yield('content')

    @yield('scripts')

    @include('layouts.footer')

</body>
</html>
