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
            <div class="accordion" id="accordionMapa">
                <div class="card">
                  <div class="card-header" id="barinas-card">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#barinas-collapse" aria-expanded="true" aria-controls="barinas-collapse" data-estado="barinas">
                        Barinas
                      </button>
                    </h2>
                  </div>

                  <div id="barinas-collapse" class="collapse show" aria-labelledby="barinas-card" data-parent="#accordionMapa" >
                    <div class="card-body">

                        <li>
                            <p class="distribuidor-rif">J-090330615</p>
                            <p class="distribuidor-name">MAYOR Y DISTRIBUCIONES DON PEPE, C.A.</p>
                            <p class="distribuidor-client"> PEPE BARINAS</p>
                            <address> CEDEÑO C/C AV GUARICO Y CALLE PLAZA EDIF DON PEPE 1 OF ADMINISTRACION URB. EL PILAR BARINAS BARINAS</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-410978856</p>
                            <p class="distribuidor-name">DISTRIBUIDORA EBENEZER ALTO BARINAS, C.A</p>
                            <p class="distribuidor-client">DISTRIBUIDORA EBENEZER</p>
                            <address>ALTO BARINASCTRA NACIONAL VIA SAN CRISTOBAL CASA NRO S/N SECTOR TRONCAL 5 BARINAS</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-306089918</p>
                            <p class="distribuidor-name">DISTRIBUIDORA SABANA BURGUER, C.A.</p>
                            <p class="distribuidor-client">SABANA BURGUER</p>
                            <address>CENTRO AV 23V DE ENERO LOCAL S/N ZONA FRENTE AL BANCO DEL SUR BARINAS</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-309368281</p>
                            <p class="distribuidor-name">FERRE-HOGAR CIVITELLA, C.A.</p>
                            <p class="distribuidor-client">FERRE-HOGAR LA CIVITELLA</p>
                            <address>AV. RAUL LOPEZ ENTRE AVENIDAS VENEZUELA Y LOS ANDES LOCAL 1Y2 NRO 22 ALTO BARINAS SUR</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-405945036</p>
                            <p class="distribuidor-name">INVERSIONES HORTIFRUTA ́S NORTE C.A.</p>
                            <p class="distribuidor-client">HORTI-FRUTA NORTE</p>
                            <address>AV. FRANCIA CC LAS MERCEDES NIVEL PB LOCAL NRO 32 URB. ALTO BARINAS NORTE</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-408114399</p>
                            <p class="distribuidor-name">INVERSIONES LANDES MG C.A</p>
                            <p class="distribuidor-client">LANDES</p>
                            <address>ALTO BARINAS NORTE. AVENIDA VENEZUELA. NUMERO 198</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-400692903</p>
                            <p class="distribuidor-name">LA PARRILLITA. CA.</p>
                            <p class="distribuidor-client">LA PARRILLITA</p>
                            <address>AV. FRANCIA CON PIE DE MONTE LOCAL NUMERO 2 ALTO BARINAS NORTE EDO BARINAS</address>
                        <li>
                            <p class="distribuidor-rif">J-404335439</p>
                            <p class="distribuidor-name">TODO CARNE`S, C.A</p>
                            <p class="distribuidor-client">TODO CARNE ́S</p>
                            <address> CALLE 2B CON AVENIDA PROGRESO C.C VILLAMIZAR NIVEL PB LOCAL 3,4Y 5 URB. ALTO BARINAS</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-309099230</p>
                            <p class="distribuidor-name">DISTRIBUIDORA DE ALIMENTOS GPL,C.A.</p>
                            <p class="distribuidor-client">LA CHAQTERIA</p>
                            <address>AV. ANDRES BELLOCC LOS CAOBISNIVEL PB LOCAL 10 URB ALTO CLIENTE BARINAS</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-309099230</p>
                            <p class="distribuidor-name">DISTRIBUIDORA DE ALIMENTOS GPL,C.A.</p>
                            <p class="distribuidor-client">LA CHAQTERIAAV. ANDRES BELLOCC LOS CAOBISNIVEL PB LOCAL 10 URB ALTO BARINAS SUR.</p>
                        <address></li></address>
                        <li>
                            <p class="distribuidor-rif">J-310962944</p>
                            <p class="distribuidor-name">CONFICOMBO, C.A</p>
                            <p class="distribuidor-client">CONFICOMBO</p>
                            <address> MERIDA CRUCE CON AV ANDRES VARELA CASA NRO 14-114 SECTOR LA CAROLINA</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-296334340</p>
                            <p class="distribuidor-name">TRANSPORTE E INVERSIONES</p>
                            <p class="distribuidor-client">TRANSVEL C.A.</p>
                            <address>TRANSVEL LA CARAMUCACTRA VIA SAN CRISTOBAL LOCAL NRO S/N SECTOR LA CARAMUCA. BARINAS LA CARAMUCA BARINAS</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-05593946</p>
                            <p class="distribuidor-name">TECNO DIGITAL BARINAS, C.A.</p>
                            <p class="distribuidor-client">TECNO DIGITAL BARINAS</p>
                            <address> CAMEJO ENTRE AVENIDA RICAURTE CASA NRO 11-27 SECTOR CENTRO BARINAS V-135917679YAMILER DEL VALLE RODRIGUEZ ANGEL FP: KIOSCO YAMI  KIOSCO YAMI  AV INDUSTRIAL FRENTE AL EDIFICIO LA MILAGROSA DIAGONAL A LOS BOMBEROS DE BARINAS</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-297636811</p>
                            <p class="distribuidor-name">PANADERIA PASTELERIA LA MANSION DEL BACANO C.A</p>
                            <p class="distribuidor-client">PANADERIA LA MANSION DEL BACANO</p>
                            <address>AV. CUATRICENTENARIA CON AV. ROMULO GALLEGOS CENTRO COMERCIAL LA LLANERITA PLANTA BAJA</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-405571845</p>
                            <p class="distribuidor-name">PANADERIA, PASTELERIA Y RESTAURANT COSTA NOVA, C.A</p>
                            <p class="distribuidor-client">PANADERIA COSTA NOVA, C. A</p>
                            <address>AV INTERCOMUNAL BARINAS - BARINITAS LOCAL NRO 3 SECTOR LA REDOMA INDUSTRIALV-209656198  NASIB  JOSE KORBAJ AL-MATNI MINI LUCH PITA, F.P       DISTRIBUIDORA LA CAROLINA  CALLE CAMEJO EDIFICIO 14-39 SECTOR LA CAROLINA</address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-410764147</p>
                            <p class="distribuidor-name">INVERSIONES SASSARI 2017, C.A</p>
                            <p class="distribuidor-client">TOSCANA MARKET</p>
                            <address>AV RAUL BLONVAL LOPEZ CC LA SANTE NIVEL PB OF 16 SECTOR ALTO BARINAS</p></address>
                        </li>
                        <li>
                            <p class="distribuidor-rif">J-412917420</p>
                            <p class="distribuidor-name">TIENDAS TREBOL JL, C.A</p>
                            <p class="distribuidor-client">TIENDAS TREBOL JL</p>
                            <address>ALTO BARINAS NORTE, AVENIDA FRANCIA CASA 190, BARINAS</address>
                        </li>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item #2
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionMapa">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionMapa">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
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
