@extends('layouts.app')

{{-- Para la etiqueta title  --}}
{{-- @section('title')
    Home
@endsection --}}

{{-- @section('head')
    <link rel="stylesheet" href="{{ asset('css/index_critical.min.min.css') }}">
@endsection --}}


@section('content')

<style>
    [data-sal|=slide]{opacity:0}[data-sal=slide-left]{transform:translateX(20%)}:root{--azul:#006691;--rojo:#ad2c27;--azul-claro:#bbe1ea;--beige:#fffaf0;--marron:#431f0a;--otro-azul-claro:#76b1b5;--gris:#bcc0c0}html{scroll-behavior:smooth;font-display:swap}.first-row{padding-top:15vh}header{--triangle-position:-1%;--right-side:calc(var(--triangle-position) + 1%);--left-side:calc(var(--triangle-position) - 1%);position:relative;z-index:30;-webkit-filter:drop-shadow(0 1px 2px #000);filter:drop-shadow(0 1px 2px #000)}header nav button.navbar-toggler{color:#fff;font-size:2em}header nav ul{padding-right:10%}@media screen and (min-width:992px){header nav ul{justify-content:space-around;align-items:flex-start;height:40px}}header nav ul li a{font-family:Spartan,sans-serif;font-weight:700;color:#fff}@media screen and (max-width:991px){header nav ul li{text-align:center}}header nav ul li.logo{width:200px;height:150px;background:var(--primary);border-radius:50%;bottom:3em;display:flex;justify-content:center;position:relative;z-index:10}@media screen and (max-width:991px){header nav ul li.logo{display:none}}header nav ul li.logo img{width:90%;height:75%;-o-object-fit:contain;object-fit:contain;align-self:flex-end}header:after{content:"";display:block;position:absolute;left:0;right:0;bottom:-18%;height:10px;background-color:var(--primary);width:100%;z-index:5;-webkit-clip-path:polygon(100% 0,100% 100%,var(--right-side) 100%,var(--triangle-position) 0,var(--left-side) 100%,0 100%,0 0);clip-path:polygon(100% 0,100% 100%,var(--right-side) 100%,var(--triangle-position) 0,var(--left-side) 100%,0 100%,0 0)}@media screen and (max-width:991px){header:after{display:none}}.hero-container{text-align:center;background-color:var(--azul);overflow:hidden;background-image:url(/images/bg-puntos-blancos.png?4ce47677b0d0d5eaa27d6c996f4fc743)}.hero-container__main{padding-bottom:5em}@media screen and (min-width:992px){.hero-container__main{padding-bottom:45vh}}.hero-container__main h1{position:relative;color:var(--rojo);z-index:10;font-size:calc(1.525rem + 3.3vw);font-weight:bolder;font-family:Spartan,sans-serif;margin-top:-6vh;margin-bottom:4vh}@media (min-width:1200px){.hero-container__main h1{font-size:4rem}}.hero-container__main h1 span{display:block;color:var(--secondary);font-size:2.5rem}.hero-container__main h1:before{content:"";background-color:#fff;-webkit-clip-path:circle(50% at 50% 0);clip-path:circle(50% at 50% 0);display:block;position:absolute;width:19em;height:100vh;top:-5em;z-index:-1;left:50%;transform:translateX(-50%)}.hero-container__main .carousel-wrapper{display:block;height:10em;margin:-2em auto 4em;position:relative;z-index:10}@media screen and (min-width:768px){.hero-container__main .carousel-wrapper{height:25em;margin-top:-9em}.hero-container__main .carousel-wrapper img{-o-object-fit:contain;object-fit:contain}}@media screen and (min-width:535px) and (max-width:767px){.hero-container__main .carousel-wrapper{height:20em}.hero-container__main .carousel-wrapper img{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}}.hero-container__main .carousel-wrapper img{opacity:0;position:absolute;left:50%;transform:translateX(-50%)}.hero-container__main .btn.btn-secondary{background-color:#d9d9d9;font-family:Spartan,sans-serif;color:var(--primary);border:1px solid #d9d9d9;border-radius:2em;font-weight:700;font-size:1.25em}.cards-wrapper .cards-container{width:100%}@media screen and (min-width:992px){.cards-wrapper .cards-container{bottom:-6em;position:absolute}}@media screen and (max-width:992px){.cards-wrapper .cards-container{height:500px;margin:0}.cards-wrapper .cards-container__card{height:50%}}.cards-wrapper .cards-container__card{box-shadow:13px 13px 50px 0 #000;display:flex;flex-direction:column;background-repeat:no-repeat;background-size:cover;background-position:50%;padding:0!important;overflow:hidden}@media screen and (min-width:992px){.cards-wrapper .cards-container__card{height:75vh}}.cards-wrapper .cards-container__card img{width:100%;height:100%;-o-object-fit:cover;object-fit:cover;position:absolute}.cards-wrapper .cards-container__card p{font-family:Spartan,sans-serif;font-weight:700;flex-grow:.25;font-size:1.5em;margin-bottom:0;display:flex;justify-content:center;align-items:center;position:relative}.cards-wrapper .cards-container__card p:after{position:absolute;content:"";width:50px;height:34px}.cards-wrapper .cards-container__card p:before{content:"";background-size:contain;background-repeat:no-repeat;height:3em;width:1em;position:absolute}.cards-wrapper .cards-container__card:nth-child(odd){justify-content:flex-end;background-color:var(--primary)}.cards-wrapper .cards-container__card:nth-child(2n){background-color:var(--secondary)}.cards-wrapper .cards-container__card:nth-child(2n) p{background-color:var(--secondary);color:var(--primary)}.cards-wrapper .cards-container__card:nth-child(2n) p:after{background-color:var(--secondary);-webkit-clip-path:polygon(50% 100%,0 0,100% 0);clip-path:polygon(50% 100%,0 0,100% 0);right:0;bottom:-32px}.cards-wrapper .cards-container__card:nth-child(2n) p:before{top:135%;right:.4em}@media screen and (max-width:992px){.cards-wrapper .cards-container__card:nth-child(2n) p:before{top:150%}}@media screen and (min-width:992px){.cards-wrapper .cards-container__card:first-of-type{border-radius:35px 0 0 35px}}.cards-wrapper .cards-container__card:nth-child(2) p:before{background-image:url(/images/puntos_2.png?15b797e88ad08bf361e1b6e2f3e740a0)}.cards-wrapper .cards-container__card:nth-child(3) img{bottom:20%}.cards-wrapper .cards-container__card:last-of-type p:before{background-image:url(/images/puntos_4.png?741b2c1d31bd237d470661700c1e8528)}@media screen and (min-width:992px){.cards-wrapper .cards-container__card:last-of-type{border-radius:0 35px 35px 0}}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#000839;--secondary:#d3af48;--success:#28a745;--info:#006691;--warning:#ffc107;--danger:#ad2c27;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:"Roboto",sans-serif;--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,:after,:before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}header,nav{display:block}body{margin:0;font-family:Roboto,sans-serif;font-size:.9rem;font-weight:400;line-height:1.6;color:#212529;text-align:left;background-color:#f8fafc}h1{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-bottom:1rem}ul{margin-top:0}a{color:#000839;text-decoration:none;background-color:transparent}img{border-style:none}img{vertical-align:middle}button{border-radius:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{overflow:visible}button{text-transform:none}[type=button],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1{margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:2.25rem}@media (max-width:1200px){h1{font-size:calc(1.35rem + 1.2vw)}}.img-fluid{max-width:100%;height:auto}.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-12,.col-6,.col-lg-2{position:relative;width:100%;padding-right:15px;padding-left:15px}.col-6{flex:0 0 50%;max-width:50%}.col-12{flex:0 0 100%;max-width:100%}@media (min-width:992px){.col-lg-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.offset-lg-2{margin-left:16.6666666667%}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:.9rem;line-height:1.6;border-radius:.25rem}.btn-secondary{color:#212529;background-color:#d3af48;border-color:#d3af48}.collapse:not(.show){display:none}.nav-link{display:block;padding:.5rem 1rem}.navbar{position:relative;padding:.5rem 1rem}.navbar{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.32rem;padding-bottom:.32rem;margin-right:1rem;font-size:1.125rem;line-height:inherit;white-space:nowrap}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.125rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}@media (min-width:992px){.navbar-expand-lg{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}.bg-primary{background-color:#000839!important}.d-block{display:block!important}@media (min-width:768px){.d-md-none{display:none!important}}.sr-only{position:absolute;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}.w-100{width:100%!important}.p-0{padding:0!important}
</style>

<div class="container-fluid">
    <div class="row first-row hero-container">
        <div class="col-12 hero-container__main">
            <h1>El placer de un <span>dulce momento</span></h1>
            <div class="carousel-wrapper">

                <img class="img-galleta img-fluid" src="{{ asset('img/main-galleta.png') }}" alt="tag">
                <img  src="{{ asset('img/maria_italia.png') }}"alt="" class="img-fluid img-galleta">
                <img  src="{{ asset('img/tentazione1.png') }}"alt="" class="img-fluid img-galleta">
            </div>
            {{-- {{-- <button class="btn btn-secondary">Conoce nuestros productos</button> --}}
            <a href="{{route('products')}}" class="btn btn-secondary">Conoce nuestros productos</a>

        </div>
    </div>
    <div class="row cards-wrapper">

        <div class="row cards-container">
            <a data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-out-back" class="cards-container__card col-6 col-lg-2 offset-lg-2" href="{{route('about')}}"><img src="{{asset('img/fabroca.png')}}" alt=""><p>Nosotros</p></a>
            <a data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-out-back" class="cards-container__card col-6 col-lg-2" href="{{route('products')}}"><img src="{{asset('img/productos.png')}}" alt=""><p>Productos</p></a>
            <a data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-out-back" class="cards-container__card col-6 col-lg-2"  href="{{route('gallery')}}"><img src="{{asset('img/galeria.png')}}" alt=""><p>Galeria</p></a>
            <a data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-out-back" class="cards-container__card col-6 col-lg-2" href="{{route('contact')}}"><img src="{{asset('img/gorra.png')}}" alt=""><p>Contacto</p></a>
        </div>
    </div>
    <div class="row us-container">
        <div class="col-12 col-lg-6 us-container__text" data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-out-back">

            <p class="display-3">Nosotros</p>
            <p>Galletera Italia, C.A es una empresa de origen venezolano
                fundada en el año 2015, dedicada a la fabricación,
                comercialización y distribución de artículos de galletería con
                alcance a nivel nacional. Actualmente
                 fabricante de marcas comerciales como: María Italia, su marca
                estrella desde los inicios de la empresa y María Tentazione desde
                el año 2019 en sus dos presentaciones en sabor vainilla y sabor
                chocolate.</p>
                <a href="{{route('about')}}" class="btn btn-primary">Conócenos</a>
        </div>
        <div class="col-12 col-lg-6 position-relative d-none d-lg-block" data-sal="slide-right" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-out-back">
            <img class="img-fluid" src="{{ asset('img/galleta-shape.png') }}"  alt="galleta">

        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function(){
    let imagenes = document.querySelectorAll('.img-galleta');


    let i=0;
    function transition() {

        imagenes.forEach((img,index) => {
            if (index === i) {
                img.style.opacity = 1;
                img.style.filter = 'blur(0px)'

            } else {

                img.style.opacity = 0;
                img.style.filter = 'blur(15px)';
            }
        })

        i === imagenes.length - 1 ? i = 0 : i++
    }

    setInterval(transition,4000);





});
</script>
@endsection
