@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    Nosotros
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="carousel-gallery"></div>
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

{{-- <script src="{{ asset('js/carousel-gallery.js') }}"></script> --}}

@endsection
