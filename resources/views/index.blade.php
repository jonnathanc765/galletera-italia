@extends('layouts.app')

@section('title')
    Internet de 20 Megas Simétrico
@endsection

@section('head')

    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v4.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];

            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);

        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="2354821491228249"
        theme_color="#ff7e29"
        logged_in_greeting="¡Hola! ¿En que podemos ayudarte?"
        logged_out_greeting="¡Hola! ¿En que podemos ayudarte?">
    </div>
    
@endsection

@section('content')

<header>
    <div class="container-fluid">

        
        <div class="row primary-row">

            <div class="col-md-12">
                <img src="{{ asset('images/arribita.png') }}" alt="">
            </div>

        </div>

        <div class="row secundary-row">
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/COSTO.png') }}" alt="">
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center mt-3">
                <img src="{{ asset('images/CONTACTO.png') }}" alt="">
            </div>
        </div>
    </div>
</header>

<section class="main">
    <div class="container">

        <div class="row my-5 img-title">
            <div class="col-md-12 text-center">
                <img src="{{ asset('images/internet-siempre.png') }}" alt="">
            </div>
        </div>

        <div class="row mt-4 resources">
            <div class="col-md-4 col-sm-6 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="{{ asset('images/icons/A-PRUEBA-DE.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>a prueba de fallas eléctricas</h4>
                    <p>
                        <span>
                            Si tienes planta, tendrás internet.
                        </span>
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="{{ asset('images/icons/SERVICIO-TECNICO.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Servicio técnico garantizado</h4>
                    <p>
                        <span>
                            Atención VIP, con la velocidad que requiere tu negocio.
                        </span>
                    </p>
                </div>
            </div>
           

            <div class="col-md-4 col-sm-6 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="{{ asset('images/icons/VELOCIDAD.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Velocidad simétrica</h4>
                    <p>
                        <span>
                            Navega con la misma velocidad de subida y de bajada.
                        </span>
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="{{ asset('images/icons/INCLUYE.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Incluye línea telefónica</h4>
                    <p>
                        <span>
                            Para tus puntos de venta.
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 resource-item" data-aos="fade-right">
                <div class="text-center">
                    <img src="{{ asset('images/icons/INSTALACION-EN.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Instalación en tiempo record</h4>
                    <p>
                        <span>
                            Con todos los equipos incluidos que necesitas para estar conectado.
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 resource-item" data-aos="fade-left">
                <div class="text-center">
                    <img src="{{ asset('images/icons/AVALADOS.png') }}" alt="">
                </div>
                <div class="captions">
                    <h4>Avalado por los grandes</h4>
                    <p>
                        <span>
                            Respaldado por la plataforma de fibra óptica mas grande del país.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="container border-top border-dark"></div>

            <div class="col-md-6 col-lg-6 d-flex justify-content-center flex-column title-information">
                <h2 class="text-right">¿QUIERES SABER MÁS?</h2>
                <p class="text-right">
                    DÉJANOS TUS DATOS Y NOS PONDREMOS EN CONTÁCTO CONTIGO LO MAS PRONTO POSIBLE
                </p>
            </div>
    
            <div class="col-md-6">
                <div class="form">
                    <form action="{{ route('mails.store') }}" method="POST" id="form">
                        {{ csrf_field() }}
                        <div class="inputs">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" value="{{ old('name') }}" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Ej: Pedro Pérez" name="name">
                                @error('name')
                                <div class="invalid-feedback" style="color: #fff;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad</label>
                                <select class="form-control @error('city')is-invalid @enderror" id="city" name="city">
                                    <option value="" disabled selected>Elija una ciudad</option>
                                    @foreach(App\City::orderBy('name','ASC')->get() as $city)
                                    <option value="{{ $city->name }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" value="{{ old('city') }}" class="form-control @error('city')is-invalid @enderror" id="city" placeholder="Ej: Valencia" name="city"> -->
                                @error('city')
                                <div class="invalid-feedback" style="color: #fff;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" value="{{ old('phone') }}" class="form-control @error('phone')is-invalid @enderror" id="phone" placeholder="Ej: 04121739590" name="phone">
                                @error('phone')
                                <div class="invalid-feedback" style="color: #fff;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="text" value="{{ old('email') }}" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Ej: pedroperez@gmail.com" name="email">
                                @error('email')
                                <div class="invalid-feedback" style="color: #fff;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="button-container">
                            <button type="button" id="send-button" class="d-flex align-items-center">
                                <span class="text-right text">
                                    Quiero que me llamen
                                </span> 
                                <span>
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>


<footer>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 col-12 logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>

            <div class="col-md-10 contact">
                <div class="row">
                    <div class="col-md-12 title">
                        <h2>SIGUENOS EN REDES</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 social-links">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-12 col-lg-3 my-2 col-md-6">
                                    <a href="https://www.facebook.com/Tconectave-2354821491228249/?modal=admin_todo_tour" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true" style="padding: 0.28em 0.5em;"></i>
                                        @TCONECTAVE
                                    </a>
                                </div>
                                <div class="col-12 col-lg-3 my-2 col-md-6">
                                    <a href="https://www.instagram.com/tconectave/" target="_blank"> 
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                        @TCONECTAVE
                                    </a>
                                </div>
                                <div class="col-12 col-lg-3 my-2 col-md-6">
                                    <a href="bit.ly/2OaVYqO" target="_blank"> 
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        04123038070
                                    </a>
                                </div>
                                <div class="col-12 col-lg-3 my-2 col-md-6">
                                    <a href="bit.ly/2OaVYqO" target="_blank"> 
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        contacto@tconectave.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
@endsection

@section('scripts')

    <script type="text/javascript">
        document.getElementById('send-button').addEventListener('click', function() {
            fbq('track', 'Contact');
            document.getElementById('form').submit();
        }, false);
    </script>
    
    @if ($errors->any())
    <script src="{{ asset('js/sweetalert2@8.js') }}"></script>
    <script>
        Swal.fire('Tenemos un problema...', 'Debe llenar todos los campos correctamente',
            'error');
    </script>
    @endif

@endsection
