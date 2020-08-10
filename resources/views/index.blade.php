@extends('layouts.app')

@section('title')
    Presentacion
@endsection

@section('head')

    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">

@endsection

@section('content')

<main>
    <div class="container-fluid index">
        <div class="row">
            {{-- Imagen  --}}
            <div class="col-md-4 col-sm-6 main-image d-flex justify-content-center align-items-center main-image">
                <img src="{{ asset('images/main-image.png') }}" class="w-100" alt="">
            </div>
            {{-- Información adicional --}}
            <div class="col-md-4 col-sm-6 promise-value">
                <p class="promise-text">
                    CONVIERTE TU <strong>NEGOCIO</strong> EN <strong>AGENTE AUTORIZADO</strong> DE SERVICIOS DE <strong>TELEVISIÓN, INTERNET Y TELEFONÍA</strong>
                </p>

                <div class="justify-content-center fixed-button">
                    <h3 class="send-button" class="shadow">
                        <a href="#section-6">
                            Envíame la <br> propuesta
                        </a>
                    </h3>
                </div>

                <div class="down-icon justify-content-center">
                    <a href="#section-1">
                        <img src="{{ asset('images/elements/down-icon.png') }}" alt="">
                    </a>
                </div>

                <ul>
                    <li id="section-1">
                        <img src="{{ asset('images/logos/wifi-logo.png') }}" alt="">
                        <p>Servicios y productos de <strong>alta demanda</strong> en todo el país.</p>
                        <div class="down-icon justify-content-center">
                            <a href="#section-2">
                                <img src="{{ asset('images/elements/down-icon.png') }}" alt="">
                            </a>
                        </div>
                    </li>
                    <li id="section-2">
                        <img src="{{ asset('images/logos/bars-logo.png') }}" alt="">
                        <p>Inversión a <strong>bajo costo</strong>, con amplios márgenes de ganancia y <strong>precios competitivos.</strong></p>
                        <div class="down-icon justify-content-center">
                            <a href="#section-3">
                                <img src="{{ asset('images/elements/down-icon.png') }}" alt="">
                            </a>
                        </div>
                    </li>
                    <li id="section-3">
                        <img src="{{ asset('images/logos/computer-logo.png') }}" alt="">
                        <p>Capacitación técnica y comercial <strong>GRATUITA.</strong></p>
                        <div class="down-icon justify-content-center">
                            <a href="#section-4">
                                <img src="{{ asset('images/elements/down-icon.png') }}" alt="">
                            </a>
                        </div>
                    </li>
                    <li id="section-4">
                        <img src="{{ asset('images/logos/mouse-logo.png') }}" alt="">
                        <p>Acceso a base de datos de <strong>clientes potenciales</strong></p>
                        <div class="down-icon justify-content-center">
                            <a href="#section-5">
                                <img src="{{ asset('images/elements/down-icon.png') }}" alt="">
                            </a>
                        </div>
                    </li>
                    <li id="section-5">
                        <img src="{{ asset('images/logos/cogs-logo.png') }}" alt="">
                        <p>Con el soporte de la Infraestructura <strong>tecnológica más grande</strong> del país.</p>
                        <div class="down-icon justify-content-center">
                            <a href="#section-6">
                                <img src="{{ asset('images/elements/down-icon.png') }}" alt="">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- Formulario  --}}
            <div class="col-md-4 col-sm-12 form" id="section-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-title d-flex justify-content-center flex-column align-items-center">
                            <img src="{{ asset('images/isotipo-logo.png') }}" class="w-100" alt="logo de telecom">
                            <h2 class="text-center">REGISTRA</h2>
                            <p>LOS DATOS DE TU NEGOCIO Y RECIBE LA PROPUESTA</p>
                            <h3>¡Comienza ya!</h3>
                        </div>
                        <div class="form">
                            <form action="{{ route('mails.store') }}" method="POST" id="form">
                                {{ csrf_field() }}
                                <div class="inputs">
                                    <div class="form-group">
                                        <input type="text" value="{{ old('name') }}" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Nombre y apellido   " name="name">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{ old('company') }}" class="form-control @error('company')is-invalid @enderror" id="company" placeholder="Razón social" name="company">
                                        @error('company')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{ old('city') }}" class="form-control @error('city')is-invalid @enderror" id="city" placeholder="Ciudad" name="city">
                                        @error('city')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{ old('phone') }}" class="form-control @error('phone')is-invalid @enderror" id="phone" placeholder="Teléfono" name="phone">
                                        @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{ old('email') }}" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Correo" name="email">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h3 id="send-button" class="shadow send-button">
                                        <a href="#">
                                            Envíame la <br> propuesta
                                        </a>
                                    </h3>
                                </div>
                                <p class="text-center">¿Necesitas más información? <strong>Ponte en contacto con nosotros</strong></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



@endsection

@section('scripts')

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $('#send-button').click(function(e) {
            e.preventDefault();
            $("#send-button").attr('disabled', true);
            $('#form').submit();
        });
    </script>

    @if ($errors->any())
    <script src="{{ asset('js/sweetalert2@8.js') }}"></script>
    <script>
        Swal.fire('Tenemos un problema...', 'Debe llenar todos los campos correctamente',
            'error');
    </script>
    @endif

    @if (session()->has('error'))
    <script src="{{ asset('js/sweetalert2@8.js') }}"></script>
    <script>
        Swal.fire('Tenemos un problema...', "{{ session('error') }}",
            'error');
    </script>
    @endif

@endsection
