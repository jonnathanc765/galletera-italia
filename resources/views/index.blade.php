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
            <img class="img-fluid" src="{{ asset('img/main-galleta.png') }}" alt="tag">
            <button class="btn btn-secondary">Conoce nuestros productos</button>
        </div>
    </div>
    <div class="row cards-wrapper">

        <div class="row cards-container">
            <div class="cards-container__card offset-2 col-2"><p>Nosotros</p></div>
            <div class="cards-container__card col-2"><p>Productos</p></div>
            <div class="cards-container__card col-2"><p>Galeria</p></div>
            <div class="cards-container__card col-2"><p>Contacto</p></div>
        </div>
    </div>
    <div class="row us-container">
        <div class="col-12 col-lg-6 us-container__text">

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
        <div class="col-12 col-lg-6 position-relative">
            <img class="img-fluid" src="{{ asset('img/galleta-shape.png') }}"  alt="galleta">

        </div>
    </div>
</div>
@endsection
