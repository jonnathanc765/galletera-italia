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

<div class="container">
    <div class="row">
        <div class="col-md-6 col-12">
            <p>Lorem ipsum dolor sit amet, con-sectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
            <address><p>Ubicación</p><p>Av. 02 Sur, Parque IndustrialCOSDZIEBA. Barinas, Venezuela.</p></address>
            <p>Contacto: <span>info@galleteraitalia.com0273-5420707 / 5420461 / 5420392</span></p>
            <p>Redes sociales: 3 iconos sociales aca</p>
        </div>
        <div class="col-md-6 col-12">

            <div class="form">
                <form action="{{ route('mails.store') }}" method="POST" id="form">
                    {{ csrf_field() }}
                    <div class="inputs">
                        <div class="form-group">
                            <input type="text" value="{{ old('name') }}" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Nombre"name="name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <input type="text" value="{{ old('company') }}" class="form-control @error('company')is-invalid @enderror" id="company" placeholder="Razón social (Campo obligatorio *)" name="company">
                            @error('company')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <input type="text" value="{{ old('email') }}" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Correo" name="email">
                            @error('email')
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

                        {{-- <div class="form-group">
                            <input type="text" value="{{ old('city') }}" class="form-control @error('city')is-invalid @enderror" id="city" placeholder="Ciudad" name="city">
                            @error('city')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <textarea  id="" cols="30" rows="10" class="form-control">
                                ¿En qué podemos ayudarte?
                            </textarea>
                        </div>


                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        <h3 id="send-button" class="shadow send-button">
                            <a href="#">
                                Envíame la <br> propuesta
                            </a>
                        </h3>
                    </div>
                    <p class="text-center">* PARA POSTULARTE DEBES TENER <strong>EMPRESA REGISTRADA</strong></p> --}}
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
            <p>Nuestros distribuidores</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
            <p>venezuela</p>
        </div>
        <div class="col-md-6 col-12" id="mapa-container">
            {{-- MAPA DE VENEZUELA TE AMO VENEZUELA --}}
        </div>
    </div>
</div>


@endsection

@section('scripts')

    <script>
        document.addEventListener('DOMContentLoaded',async function(){

            const svgUrl = {!! json_encode(asset('img/vzla.svg')) !!}
            const mapaContainer = document.getElementById('mapa-container')

            let request = await fetch(svgUrl)
            let svgText = await request.text()

            const parser = new DOMParser();
            const svgHtml = parser.parseFromString(svgText, "text/html");
            mapaContainer.appendChild(svgHtml.body.querySelector('svg'))
        })
    </script>

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
