@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    Presentacion
@endsection

@section('head')

    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">

@endsection

{{-- Este es el formulario (dejarolo ) --}}
@section('content')

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
                <input type="text" value="{{ old('company') }}" class="form-control @error('company')is-invalid @enderror" id="company" placeholder="Razón social (Campo obligatorio *)" name="company">
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
        <p class="text-center">* PARA POSTULARTE DEBES TENER <strong>EMPRESA REGISTRADA</strong></p>
    </form>
</div>

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
