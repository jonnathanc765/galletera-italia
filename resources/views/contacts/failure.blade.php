@extends('layouts.app')

@section('title', 'Fallido')


@section('content')
<main class="message">
    <div class="container failure">
        <div class="row">

            <div class="col-md-5">
                <img class="w-100" src="{{ asset('images/incorrect-logo.png') }}" alt="">
            </div>
            <div class="col-md-7 text">

                <h3 class="text-center">¡Tu teléfono o correo ya fueron registrados!</h3>
                <p class="text-center">Te reenviamos a tu correo electrónico los detalles de la propuesta de negocios y los requisitos para ser agente autorizado!</p>

                <p class="text-center small">
                    si no lo ves en la bandeja principal, revisa la bandeja de spam
                </p>

            </div>

        </div>
    </div>
</main>
@endsection
