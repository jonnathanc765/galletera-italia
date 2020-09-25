<!DOCTYPE html>
<html lang="es">
<head>


    <title>{{ config('app.name') }} @yield('title')</title>
    <meta name="robots" content="index,follow" />
    <meta name="google" content="notranslate" />
    <meta name="title" content="{{ config('app.name') }} - @yield('title')" />
    <meta name="language" content="es" />
    <meta name="revisit-after" content="1 day" />
    <meta name="rating" content="General" />
    <meta name="author" content="Multiviral & Adrian Guerrero"/>
    <meta name="owner" content="Galleteria Italia" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="preload" href="{{ asset('css/app.css')  }}" as="style" onload="this.rel='stylesheet'"> --}}

    <link rel="preload" href="{{ asset('css/app.css')  }}" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap" as="font" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;400;700&display=swap" as="font" crossorigin>
    <meta name="theme-color" content="#00013a">
    <link rel="shortcut icon" href="{{ asset('images/isotipo-logo.png') }}">


    @yield('head')

</head>
<body>
    @include('layouts.header')

    @yield('content')

    @yield('scripts')

    @include('layouts.footer')


    <link rel="stylesheet" href="{{ asset('css/app.css')  }}" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;400;700&display=swap">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded',function(){

            let header = document.querySelector('header')
            let active = document.querySelector('.active-page')
            if(typeof active === 'undefined') {
                return
            } else {

                let headerCoords = header.getBoundingClientRect()
                let activeCoords = active.getBoundingClientRect()
                // calculamos q tan a la izquiera esta
                // pasa eso sacamos q tan a la izquierda, mas la mitad del ancho
                let halfActive = activeCoords.left + (activeCoords.width/2)
                // cantidad porcentual con respecto al padre
                let percentage = ((halfActive)*100)/headerCoords.width
                header.style.setProperty('--triangle-position', `${String(percentage)}%`);
            }
        })
    </script>

</body>
</html>
