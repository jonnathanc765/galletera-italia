@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    Presentacion
@endsection


@section('content')
<div class="container-fluid">
    <div class="row first-row hero-container">
        <div class="col-12 hero-container__main">
            <h1>El placer de un <span>dulce momento</span></h1>
            <div class="carousel-wrapper">

                <img class="img-galleta img-fluid" src="{{ asset('img/main-galleta.png') }}" alt="tag">
                <img  src="{{ asset('img/maria_italia.png') }}"alt="" class="img-fluid img-galleta">
                <img  src="{{ asset('img/tentazione1.png') }}"alt="" class="img-fluid img-galleta">
            </div>
            <button class="btn btn-secondary">Conoce nuestros productos</button>
        </div>
    </div>
    <div class="row cards-wrapper">

        <div class="row cards-container">
            <a class="cards-container__card col-6 col-lg-2 offset-lg-2" href="{{route('about')}}"><img src="{{asset('img/fabroca.png')}}" alt=""><p>Nosotros</p></a>
            <a class="cards-container__card col-6 col-lg-2" href="{{route('products')}}"><img src="{{asset('img/productos.png')}}" alt=""><p>Productos</p></a>
            <a class="cards-container__card col-6 col-lg-2"  href="{{route('gallery')}}"><img src="{{asset('img/galeria.png')}}" alt=""><p>Galeria</p></a>
            <a class="cards-container__card col-6 col-lg-2" href="{{route('contact')}}"><img src="{{asset('img/gorra.png')}}" alt=""><p>Contacto</p></a>
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
                <button class="btn btn-primary">Conocenos</button>
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
        console.log(i)
    }

    setInterval(transition,4000);





});
</script>
@endsection
