@extends('layouts.app')

@section('title')
    Tutelecom
@endsection

@section('head')

    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">

@endsection

@section('content')

<main class="index">
    <div class="container-fluid">
        <div class="row">
            {{-- Imagen  --}}
            <div class="col-md-4 main-image d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/main-image.png') }}" class="w-100" alt="">
            </div>
            {{-- Información adicional --}}
            <div class="col-md-4 promise-value">
                <p class="promise-text">
                    CONVIERTE TU <strong>NEGOCIO</strong> EN <strong>AGENTE AUTORIZADO</strong> DE SERVICIOS DE <strong>TELEVISIÓN, INTERNET Y TELEFONÍA</strong>
                </p>
                <ul>
                    <li>
                        <img src="{{ asset('images/logos/wifi-logo.png') }}" alt="">
                        <p>Servicios y productos de <strong>alta demanda</strong> en todo el país.</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/logos/bars-logo.png') }}" alt="">
                        <p>Inversión a <strong>bajo costo</strong>, con amplios márgenes de ganancia y <strong>precios competitivos.</strong></p>
                    </li>
                    <li>
                        <img src="{{ asset('images/logos/computer-logo.png') }}" alt="">
                        <p>Capacitación técnica y comercial <strong>GRATUITA.</strong></p>
                    </li>
                    <li>
                        <img src="{{ asset('images/logos/mouse-logo.png') }}" alt="">
                        <p>Acceso a base de datos de <strong>clientes potenciales</strong></p>
                    </li>
                    <li>
                        <img src="{{ asset('images/logos/cogs-logo.png') }}" alt="">
                        <p>Con el soporte de la Infraestructura <strong>tecnológica más grande</strong> del país..</p>
                    </li>
                </ul>
            </div>
            {{-- Formulario  --}}
            <div class="col-md-4 form">
                <div class="card">
                    <div class="card-body">
                        <div class="form">
                            <form action="{{ route('mails.store') }}" method="POST" id="form">
                                {{ csrf_field() }}
                                <div class="inputs">
                                    <div class="form-group">
                                        <input type="text" value="{{ old('name') }}" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Nombres y apellidos" name="name">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{ old('company') }}" class="form-control @error('company')is-invalid @enderror" id="company" placeholder="Nombre del negocio" name="company">
                                        @error('company')
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
                                <a type="submit" id="send-button">
                                    <h3>Enviame la propuesta</h3>
                                </a>
                                <p>¿Necesitas más información? <strong>Ponte en contacto con nosotros</strong></p>
                                <p class="text-center">¿Ya te registraste? <a href="#">Inicia sesión</a></p>
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

@endsection
