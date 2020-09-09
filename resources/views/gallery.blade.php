@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    Nosotros
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0">
            <div class="carousel-gallery">
                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 1</p>
                        <p>Damos inicio al proceso productivo de nuestras galletas, recibiendo los ingredientes suministrados por los proveedores,  asegurándonos de que estén en buen estado, y cumplan con los estándares de calidad requeridos, para luego ser almacenados según las normas sanitarias y normas internas de la empresa</p>
                    </div>
                </div>
                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 2</p>
                        <p>Nos dirigimos al área de pre pesado, donde realizamos el pesaje de los ingredientes para los batch, que ordenamos en cestas y trasladamos al área de mezcla</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 3</p>
                        <p>Iniciamos el proceso de mezcla introduciendo los ingredientes pre pesados en las mezcladoras, hasta obtener una masa sólida que será trasladada en contenedores</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 4</p>
                        <p>Nos dirigimos al dosificador, donde se forma una lámina de masa que pasa por diferentes recorridos hasta llegar al área de corte y estampado dando como resultado el producto requerido</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 5</p>
                        <p>Continuamos el proceso en el área de horneado, donde las galletas atraviesan un proceso de cocción aproximado de 4 minutos distribuidos en diferentes etapas.</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 6</p>
                        <p>Realizamos el control de calidad, donde verificamos el espesor, diámetro, color y textura de las galletas, corroborando que cumplan con los estándares establecidos</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 7</p>
                        <p>Trasladamos las galletas a través de un proceso de enfriamiento al natural, para tener como destino el área de empaque</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 8</p>
                        <p>Envasamos un contenido de 4 galletas, que luego se dirigen hacia las estaciones robotizadas, las cuales llenan las cadenas de alimentación de la maquina multipack obteniéndose los paquetes tubulares según su presentación (Maria Italia, Maria Tentazione y MariaTentazione Chocolate)</p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 9</p>
                        <p>Destino 1: Máquina termo-encogible para envasar bultos de doce tubulares (Maria Italia).
                            Destino 2: De manera manual envasamos en cajas en presentaciones de 30 unidades (para Maria Italia) o 24 (para Tentazione o Tentazione Chocolate).
                        </p>
                    </div>
                </div>

                <div class="carousel__cell">
                    <div class="text">
                        <p class="h3">PASO 10</p>
                        <p>Apilamos los bultos y cajas que serán destinadas a supervisión y control de calidad, donde verificamos que el producto cumpla con los estándares establecidos, para culminar identificando las paletas y dando entrada a las mismas al almacén de producto terminado</p>
                    </div>
                </div>
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

        const animalito = document.getElementById('animalito')
        const container = document.querySelector('.slogan-container')

        const io = new IntersectionObserver(entries => {


            // Element enters the viewport
            if (entries[0].intersectionRatio !== 0) {

                // How much of the element is visible

                animalito.style.setProperty('--posX', `${entries[0].boundingClientRect.top * -1}px`)

                // Element leaves the viewport
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
