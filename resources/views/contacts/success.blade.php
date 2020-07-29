@extends('layouts.app')

@section('title', 'Exitoso')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img class="w-100" src="{{ asset('images/correct-logo.png') }}" alt="">
            </div>
            <div class="col-md-7">
                <h3 class="text-center">¡Tu registro de datos fue un éxito!</h3>
                <p class="text-center">Enviamos a tu correo los detalles de la propuesta de negocios y los requisitos para ser agentes autorizados!</p>
                <p class="text-center small">
                    si no lo ves en la bandeja principal, revisa la bandeja de spam
                </p>
            </div>
        </div>
    </div>
</main>
@endsection
