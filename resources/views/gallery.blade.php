@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    Nosotros
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0 position-relative overflow-hidden">
            <div class="carousel-gallery">

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 1</p>
                        <p>Damos inicio al proceso productivo de nuestras galletas, recibiendo los ingredientes suministrados por los proveedores,  asegurándonos de que estén en buen estado, y cumplan con los estándares de calidad requeridos, para luego ser almacenados según las normas sanitarias y normas internas de la empresa</p>
                    </div>
                </div>
                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 2</p>
                        <p>Nos dirigimos al área de pre pesado, donde realizamos el pesaje de los ingredientes para los batch, que ordenamos en cestas y trasladamos al área de mezcla</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 3</p>
                        <p>Iniciamos el proceso de mezcla introduciendo los ingredientes pre pesados en las mezcladoras, hasta obtener una masa sólida que será trasladada en contenedores</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 4</p>
                        <p>Nos dirigimos al dosificador, donde se forma una lámina de masa que pasa por diferentes recorridos hasta llegar al área de corte y estampado dando como resultado el producto requerido</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 5</p>
                        <p>Continuamos el proceso en el área de horneado, donde las galletas atraviesan un proceso de cocción aproximado de 4 minutos distribuidos en diferentes etapas.</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 6</p>
                        <p>Realizamos el control de calidad, donde verificamos el espesor, diámetro, color y textura de las galletas, corroborando que cumplan con los estándares establecidos</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 7</p>
                        <p>Trasladamos las galletas a través de un proceso de enfriamiento al natural, para tener como destino el área de empaque</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 8</p>
                        <p>Envasamos un contenido de 4 galletas, que luego se dirigen hacia las estaciones robotizadas, las cuales llenan las cadenas de alimentación de la maquina multipack obteniéndose los paquetes tubulares según su presentación (Maria Italia, Maria Tentazione y MariaTentazione Chocolate)</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 9</p>
                        <p>Destino 1: Máquina termo-encogible para envasar bultos de doce tubulares (Maria Italia).
                            Destino 2: De manera manual envasamos en cajas en presentaciones de 30 unidades (para Maria Italia) o 24 (para Tentazione o Tentazione Chocolate).
                        </p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3 text-center">PASO 10</p>
                        <p>Apilamos los bultos y cajas que serán destinadas a supervisión y control de calidad, donde verificamos que el producto cumpla con los estándares establecidos, para culminar identificando las paletas y dando entrada a las mismas al almacén de producto terminado</p>
                    </div>
                </div>
            </div>
            <div class="carousel-gallery__buttons">
                    <button class="btn carousel-gallery__buttons-next">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.29 48.29"><defs></defs><title>Boton galleta</title><g><g><path d="M24.14,0A24.15,24.15,0,1,1,0,24.14,24.17,24.17,0,0,1,24.14,0Zm0,46.29A22.15,22.15,0,1,0,2,24.14,22.18,22.18,0,0,0,24.14,46.29Z"/><circle cx="36.59" cy="28.03" r="1.35"/><circle cx="27.01" cy="37.6" r="1.35"/><circle cx="14.74" cy="37.6" r="1.35"/><circle cx="10.69" cy="24.14" r="1.35"/><circle cx="24.14" cy="24.14" r="1.35"/><circle cx="35.24" cy="13.11" r="1.35"/><circle cx="24.14" cy="11.08" r="1.35"/><circle cx="14.74" cy="14.46" r="1.35"/></g></g></svg>
                    </button>
                    <button class="btn carousel-gallery__buttons-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.29 48.29"><defs></defs><title>Boton galleta</title><g><g><path d="M24.14,0A24.15,24.15,0,1,1,0,24.14,24.17,24.17,0,0,1,24.14,0Zm0,46.29A22.15,22.15,0,1,0,2,24.14,22.18,22.18,0,0,0,24.14,46.29Z"/><circle cx="36.59" cy="28.03" r="1.35"/><circle cx="27.01" cy="37.6" r="1.35"/><circle cx="14.74" cy="37.6" r="1.35"/><circle cx="10.69" cy="24.14" r="1.35"/><circle cx="24.14" cy="24.14" r="1.35"/><circle cx="35.24" cy="13.11" r="1.35"/><circle cx="24.14" cy="11.08" r="1.35"/><circle cx="14.74" cy="14.46" r="1.35"/></g></g></svg>
                    </button>
                </div>
        </div>
    </div>
    <div class="row slogan-container">
        <div class="col-12 slogan__main">
            <p class="h1">Galletas <span>MARÍA</span></p>
            <p class="h2">QUE ACOMPAÑAN <span>tus dulces momentos</span></p>
            <button class="btn btn-primary">Contactanos</button>
            <img class="galletas" src="{{ asset('img/montaña.png') }}" alt="galletas">
            <img src="{{ asset('img/animalito.png') }}" id="animalito" alt="animal de galletas" class="animalito">
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>

    document.addEventListener("DOMContentLoaded", function () {

        let cuandoMover = 0
        let breakMin=0
        let breakMax=0
        let wantBreak = false
        let compensacion = 0

        if (window.matchMedia('(max-width: 768px)').matches) {
            breakMin=0
            breakMax=0
            wantBreak = false
            cuandoMover = 0.6

            compensacion = '60vw'
        }
        if (window.matchMedia('(min-width: 992px)').matches) {
            breakMin=-300
            breakMax=20
            cuandoMover = 0.86
            wantBreak = true

            compensacion = '30vw'
        }

            const animalito = document.getElementById('animalito')
            const container = document.querySelector('.slogan-container')

            const io = new IntersectionObserver(entries => {

                console.log(breakMin,breakMax,cuandoMover,wantBreak);
                // Element enters the viewport
                if (entries[0].intersectionRatio !== 0) {


                    let value = entries[0].boundingClientRect.top * -1

                    if ((value < breakMin || value > breakMax) && wantBreak) return

                    if (entries[0].intersectionRatio >= cuandoMover) value = `${value}px + ${compensacion}`
                    else value = `${value}px`

                    console.log(entries[0].intersectionRatio)
                    console.log(value);

                    animalito.style.setProperty('--posX', `${value}`)

                }

            }, {
                // Call the observer, when the element enters the viewport,
                // when 25%, 50%, 75% and the whole element are visible
                // rootMargin: '0px 0px -20px 0px',
                threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1]
            });

            // Start observing .box
            io.observe(container);

    })

</script>

<script src="{{ asset('js/carousel-gallery.js') }}"></script>

@endsection
