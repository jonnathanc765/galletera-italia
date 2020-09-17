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

<div class="container-fluid">
    <div class="row first-row form-wrapper">
        <div class="wrapper-big">

            <div class="col-12 ">
                <div class="row form-container">

                    <div class="col-md-3 col-12">
                        <p>Contáctanos y sé parte de nuestra cartera de clientes.</p>
                        <address><p class="font-weight-bold mb-1">Ubicación:</p><p>Av. 02 Sur, Parque Industrial COSDZIEBA. Barinas, Venezuela.</p></address>
                        <p class="font-weight-bold mb-1">Contacto: <span class="d-block font-weight-normal">info@galleteraitalia.com0273-5420707 / 5420461 / 5420392</span></p>
                        <p class="font-weight-bold mt-3 social-media">
                            <a target="_blank" href="https://www.instagram.com/galletera.italia/"> <i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://www.facebook.com/GalleteraItalia"> <i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/company/galletera-italia/"> <i class="fab fa-instagram"></i></a>
                        </p>
                    </div>
                    <div class="col-md-6 col-12 offset-lg-3 offset-0 form-container__form">

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
                                        <textarea  id="" class="form-control">¿En qué podemos ayudarte?
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

            </div>
        </div>
    </div>

    <div class="row mapa-container" id="mapa-wrapper">
        <div class="col-12 mb-3">
            <div class="row">
                <div class="col-12">

                    <p class="h1"><small class="d-block h2">Nuestros</small>Distribuidores</p>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="accordion" id="accordion-mapa">
                <div class="card">
                  <div class="card-header active-state" id="card-barinas">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-barinas" aria-expanded="true" aria-controls="collapse-barinas" data-estado="barinas">
                        Barinas
                      </button>
                    </h2>
                  </div>

                  <div id="collapse-barinas" class="collapse show" aria-labelledby="card-barinas" data-parent="#accordion-mapa" >
                    <div class="card-body">
                    <ul>
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
                    </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="card-lara">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-lara" aria-expanded="false" aria-controls="collapse-lara" data-estado="lara">
                        Lara
                      </button>
                    </h2>
                  </div>
                  <div id="collapse-lara" class="collapse" aria-labelledby="card-lara" data-parent="#accordion-mapa">
                    <div class="card-body">
                      <ul>
                            <li>
                                <p class="distribuidor-rif">J404354972</p>
                                <p class="distribuidor-name"> INVERSIONES DAMICO MORENO, C.A </p>
                                <p class="distribuidor-client">CARLOS MEDINA</p>
                                <address>AV AVENIDA PEDRO LEON TORRES CON CRUCE 59 CC SOTAVENTO NIVEL 2 LOCAL 30 ZONA OBELISCO BARQUISIMETO LARA. ZONA POSTAL</address>
                            </li>
                            <li>
                                <p class="distribuidor-rif">J404354727</p>
                                <p class="distribuidor-name"> DISTRIBUIDORA DAMICO 2014 </p>
                                <p class="distribuidor-client">MARIEELLY CURE</p>
                                <address>AV PEDRO LEON TORRES CON CALLE 59 CC SOTAVENTO NIVEL 2 LOCAL 30 OFICINA 30 ZONA CENTRO BARQUISIMETO LARA ZONA POSTAL</address>
                            </li>

                            <li>
                                <p class="distribuidor-rif">J317529669</p>
                                <p class="distribuidor-name"> DON PEPE LARA DISTRIBUIDORA DE ALIMENTOS CA</p>
                                <p class="distribuidor-client">JUAN AMARO</p>
                                <address>AV. CARLOS GIFFONI CC GIL ROB NIVEL PB LOCAL 5 ZONA INDUSTRIAL III BARQUISIMETO LARA ZONA POSTAL</address>
                            </li>

                            <li>
                                <p class="distribuidor-rif">J411792896</p>
                                <p class="distribuidor-name"> DON PEPE MARKET WEST, CA</p>
                                <p class="distribuidor-client">ALEXANDRA BALCARCEL</p>
                                <address>AVENIDA PEDRO LEON TORRES CASA EDIFICIO HEIDIEN PLANTA BAJA NRO 19- 78 LOCAL 1 SECTOR CENTRO BARQUISIMETO LARA ZONA POSTAL CALLE 52 A ENTRE CARRERAS 19 Y</address>
                            </li>


                            <li>
                                <p class="distribuidor-rif">J296883831</p>
                                <p class="distribuidor-name"> INVERSIONES LA GUADALUPANA DE VZLA, C. A</p>
                                <p class="distribuidor-client">JOSUE MORENO</p>
                                <address>CTRA VIA CUARA ENTRE AV FLORENCIO JIMENEZ Y AVENIDA ROTARIA LOCAL GALPON GUADALUPANA NRO S/N SECTOR EL POBLADO QUIBOR</address>
                            </li>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="card-caracas">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-caracas" aria-expanded="false" aria-controls="collapse-caracas" data-estado="caracas">
                        Caracas
                      </button>
                    </h2>
                  </div>
                  <div id="collapse-caracas" class="collapse" aria-labelledby="card-caracas" data-parent="#accordion-mapa">
                    <div class="card-body">
                      <ul>
                        <li>
                            <p class="distribuidor-rif">J403740313</p>
                            <p class="distribuidor-name">ALIMENTOS LA MERIENDA DE CARACAS V.A., C.A.</p>
                            <p class="distribuidor-client">ANTONIO DUGARTE</p>
                            <address>AV JOSE ANGEL LAMAS EDIF Nº 6 PISO E1 LOCAL CENTRO INDUSTRIAL PALO GRANDES ZONA SAN MARTIN CARACAS DISTRITO CAPITAL ZONA POSTAL 1020</address>
                            </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-anzoategui">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-anzoategui" aria-expanded="false" aria-controls="collapse-anzoategui" data-estado="anzoategui">
                          Anzoategui
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-anzoategui" class="collapse" aria-labelledby="card-anzoategui" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif"> J309577590 </p>
                                <p class="distribuidor-name"> COMERCIALIZADORA BREÑA BAJA, C.A.</p>
                                <p class="distribuidor-client"> GRECIA RODRIGUEZ </p>
                                <address>CALLE LOS TUBOS VIA LA AUTOPISTA BARCELONA EL TIGRE Y EL AEROPUERTO LOCAL CENTRO EMPRESARIAL "AEROCENTRO CENTRO EMPRESARIAL " NRO P-19 SECTOR LA REDOMA PARCELA NRO 19 ETAPA 1 BARCELONA ANZOATEGUI ZONA POSTAL 6001</address>
                            </li>

                            <li>
                                <p class="distribuidor-rif"> J403975345 </p>
                                <p class="distribuidor-name"> CANDY CITY PLACE, CA.</p>
                                <p class="distribuidor-client"> CARLOS ALBERTO LAMAS JONES </p>
                                <address>CALLE DEMOCRACIA CC PIO XII, PB, LOCAL No. 7, FRENTE TERMINAL DE PASAJEROS SECTOR CASCO CENTRAL </address>
                            </li>

                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-apure">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-apure" aria-expanded="false" aria-controls="collapse-apure" data-estado="apure">
                          Apure
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-apure" class="collapse" aria-labelledby="card-apure" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif">J297701389 </p>
                                <p class="distribuidor-name"> INVERSIONES PEPITAS DE ORO CA LEIDY MAR </p>
                                <p class="distrubuidor-client">VARGAS MORENO</p>
                                <address> AV INTERCOMUNAL SAN FERNANDOBIRUACA EDIF LOCAL PISO S/N GALPON NRO 3 SECTOR ELEVADO DE SANTA RIFINA BIRUACA APURE</address>
                            </li>
                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-aragua">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-aragua" aria-expanded="false" aria-controls="collapse-aragua" data-estado="aragua">
                          Aragua
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-aragua" class="collapse" aria-labelledby="card-aragua" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif"> J075455525</p>
                                <p class="distribuidor-name">DISTRIBUIDORA DE GALLETAS C A </p>
                                <p class="distribuidor-client">JOSE GARCES</p>
                                <address>CENTRO EMPRESARIAL EL ROSARIO, CALLE ESTE 1 ASENTAMIENTO CAMPESINO LOTE 11-A. GALPONES DEL 1-15 Y 8-14 LA MORITA, MARACAY ESTADO ARAGUA.</address>
                            </li>

                            <li>
                                <p class="distribuidor-rif"> J412636626</p>
                                <p class="distribuidor-name">DISTRIBUIDORA LA MERIENDA DE ARAGUA C.A</p>
                                <p class="distribuidor-client">JOHNNY ALVARADO</p>
                                <address>CARRETERA NAC CAGUA VILLA DE CURA COMPLEJO INDUSTRIAL LAS VEGAS GALPON A4</address>
                            </li>


                            <li>
                                <p class="distribuidor-rif"> J308831506</p>
                                <p class="distribuidor-name">MAVIDECO MARACAY CA </p>
                                <p class="distribuidor-client">VICENTE VARELA</p>
                                <address>AV. INTERCOMUNAL TURMERO,MARACAY,SECTOR LA PROVIDENCIA PARCELA N.33</address>
                            </li>
                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-bolivar">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-bolivar" aria-expanded="false" aria-controls="collapse-bolivar" data-estado="bolivar">
                          Bolivar
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-bolivar" class="collapse" aria-labelledby="card-bolivar" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif">J409266850</p>
                                <p class="distribuidor-name">DISTRIBUIDORA F S, C.A</p>
                                <p class="distribuidor-client">STEFANNYE ALIENDRES</p>
                                <address>ZONA INDUSTRIAL LOS PINOS TRANSVERSAL 2 , CALLE PRINCIPAL , MANZANA 12, GALPON NRO 08</address>

                                <p class="distribuidor-rif">J315689464</p>
                                <p class="distribuidor-name">DISTRIBUIDORA ALIMAR</p>
                                <p class="distribuidor-client">ROSOLINO  COSTANZO MASTROLEMBO</p>
                                <address>AVENIDA NEVERI, EDIFICIO SAME, ZONA INDUSTRIAL UNARE II, PUERTO O</address>
                            </li>

                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-carabobo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-carabobo" aria-expanded="false" aria-controls="collapse-carabobo" data-estado="carabobo">
                          Carabobo
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-carabobo" class="collapse" aria-labelledby="card-carabobo" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif">J315478455</p>
                                <p class="distribuidor-name">DISTRIBUIDORA BARMI</p>
                                <p class="distribuidor-client">GODOY / DIANA DRAGANOC / ORLANDO PEREZ</p>
                                <address>AV. PPAL. 14B-15B C.C. CITY CENTER PB LOCAL LB1 URB. PARQUE COMERCIO INDUSTRIAL CASTILLITO</address>
                            </li>

                            <li>
                                <p class="distribuidor-rif">J31535052</p>
                                <p class="distribuidor-name">COMERCIALIZADORA CENTRAL VALENCIA, C.A.</p>
                                <p class="distribuidor-client">DINORA MONTERO</p>
                                <address>A.V. JUAN ERNESTO BRANGER, GALPONES EN PARCELA 7-12, GALPON G-1, LOCAL NRO S/N SECTOR INDUSTRIAL MUNICIPAL SUR VALENCIA, CARABOBO, ZONA POSTAL 2001</address>
                            </li>
                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-coro">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-coro" aria-expanded="false" aria-controls="collapse-coro" data-estado="coro">
                          Coro
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-coro" class="collapse" aria-labelledby="card-coro" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif">J297600868</p>
                                <p class="distribuidor-name">COMERCIALIZADORA RASIL, C.A </p>
                                <p class="distribuidor-client">MAASE EL MAAZ JASAK </p>
                                <address>CALLE PURURECHE ENTRE CALLE CRISTAL Y CALLEJON CHEVROLET LOCAL S/N SECTOR CHIMPIRE, CORO EDO FALCON SANTA ANA DE CORO</address>

                            <li>

                                <p class="distribuidor-rif">J407647601</p>
                                <p class="distribuidor-name">G.B.M. DISTRIBUCIONES, C.A</p>
                                <p class="distribuidor-client">ALEXANDRA DEL CARMEN BALCARGEL</p>
                                <address>CALLE PRIMERA LOCAL NRO S/N SECTOR BOMBA H TUCACAS FALCON ZONA POSTAL 2054</address>


                            <li>
                                <p class="distribuidor-rif">J307819162</p>
                                <p class="distribuidor-name">BLADIMIR GUTIERREZ</p>
                                <p class="distribuidor-client">DISACA FALCON,SUCURSAL </p>
                                <address>CARRETERA VIA BUTARE ZONA INDUSTRIAL SECTOR SABANA LARGA</address>

                            <li>
                                <p class="distribuidor-rif">J307819162</p>
                                <p class="distribuidor-name">BLADIMIR GUTIERREZ</p>
                                <p class="distribuidor-client">DISACA FALCON, CA </p>
                                <address>CALLE GENERAL RIERA C/C BUENOS AIRES, LOCAL S/N SECTOR PUERTA MARAVEN, DETRAS DE FIRESTONE PUNTO FIJO. J</address>
                            </li>

                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-guarico">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-guarico" aria-expanded="false" aria-controls="collapse-guarico" data-estado="guarico">
                          Guarico
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-guarico" class="collapse" aria-labelledby="card-guarico" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif">J300856810</p>
                                <p class="distribuidor-name">INVERSIONES TEROR C A </p>
                                <p class="distribuidor-client">GONZALO DAVID HERNANDEZ TAVERA </p>
                                <address> AV FELIPE ANTONIO ACOSTA CARLES LOCAL GALPON NRO S/N SECTOR ENTRADA ZONA INDUSTRIAL SAN JUAN DE LOS MORROS GUARICO ZONA POSTAL 2301</address>
                            </li>
                            <li>

                                <p class="distribuidor-rif">J406296937</p>
                                <p class="distribuidor-name">AGRODISTRIBUIDORA DON MANUEL, C.A. </p>
                                <p class="distribuidor-client">ALEJANDRO VARGAS</p>
                                <address>CALLE PARAISO EDIF FRANCA PISO PB LOCAL 1 SECTOR CENTRO VALLE LA PASCUA, GUARICO CARRETERA NACIONAL SAN FERNANDO</address>
                            </li>
                            <li>

                                <p class="distribuidor-rif">J295658400</p>
                                <p class="distribuidor-name">DISTRITALES CA JONATHAN ALEX HEVIA MONTOYA </p>
                                <p class="distribuidor-client">0424-3055033 GUARICO </p>
                                <address> LOCAL COMERCIAL GALPON 1 URB. CENTRO ADMINISTRATIVO CALABOZO ESTADO GUARICO</address>
                            </li>
                            <li>

                                <p class="distribuidor-rif">J410594080</p>
                                <p class="distribuidor-name">LA REPRESA DISTRIBUCIONES (REDISCA) C.A.</p>
                                <p class="distribuidor-client">GREGORY BLANCO </p>
                                <address> CALLE CARRERA 1 CON CALLE 7-A LOCAL N/A NRO 08-12 SECTOR CASCO CENTRAL CALABOZO GUARICO ZONA POSTAL 2312</address>
                            </li>
                            <li>

                                <p class="distribuidor-rif">J302687721</p>
                                <p class="distribuidor-name">COMERCIAL ROSCIO, CA</p>
                                <p class="distribuidor-client">JUDI LEON </p>
                                <address> CALLE BERMUDEZ LOCAL NRO 48 SECTOR CENTRO SAN JUAN DE LOS MORROS ESTADO GUARICO</address>
                            </li>

                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-merida">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-merida" aria-expanded="false" aria-controls="collapse-merida" data-estado="merida">
                          Merida
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-merida" class="collapse" aria-labelledby="card-merida" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif">J304792590</p>
                                <p class="distribuidor-name">DISTRIBUIDORA JAMA CA</p>
                                <p class="distribuidor-client">BETTY MARQUEZ </p>
                                <address>PASAJE MARIA SIMONA CC SULTANA NIVEL PB LOACL 02 SECTOR BELEN</address>
                            </li>

                            <li>

                                <p class="distribuidor-rif">J299619230</p>
                                <p class="distribuidor-name">GIMAJO DISTRIBUCIONES CA</p>
                                <p class="distribuidor-client">JESUS RONDON</p>
                                <address>AV. LOS PROCERES CON CALLE SUETERES MERIDA, QUINTA MIS ABUELOS, NUMERO S/N URBANIZACION SAN JOSE, FRENTE AL LADO DE LA CASA BLANCA, PARROQUIA SPINETI DINI</address>

                            </li>

                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-miranda">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-miranda" aria-expanded="false" aria-controls="collapse-miranda" data-estado="miranda">
                          Miranda
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-miranda" class="collapse" aria-labelledby="card-miranda" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif">J311453989</p>
                                <p class="distribuidor-name"> COMERCIAL EL CASTILLO DEL DULCE, C.A. </p>
                                <p class="distribuidor-client"> CRUZ ABEL CONTRERAS</p>
                                <address> CALLE BAPTISTA EDIFICIO SER-YOLO, CRUCE CON LOS NARDOS PISO 2, LOCAL 2, URBANIZACION LEBRUM, MUNICIPIO
                                    SUCRE. CERCA DEL LICEO MARIANO PICON SALAS</address>

                            </li>
                            <li>

                                <p class="distribuidor-rif">J409463460</p>
                                <p class="distribuidor-name"> COMERCIALIZADORA Y CONFITERIA ALEXANDER, C.A.</p>
                                <p class="distribuidor-client"> ALEXANDER RODRIGUEZ HAROLD RUSH IV</p>
                                <address> PLANTA BAJA DE LA QUINTA ILKY UBICADA EN LA AVENIDA LUIS ROCHE ENTRE LAS TRANSVERSALES 6 Y 7 DE LA URB
                                    ALTAMIRA MUNICIPIO CHACAO DEL ESTADO MIRANDA</address>

                            </li>
                            <li>

                                <p class="distribuidor-rif">J294755470</p>
                                <p class="distribuidor-name"> DISTRIBUIDORA BARBARICHAN, CA </p>
                                <p class="distribuidor-client"> ORLANDO SIMON PEREZ AVILA</p>
                                <address> CTRA NACIONAL DE GUATIRE LA ROSA CC DAYMAR ETAPA II NIVEL P1 LOCAL P1-19 SECTOR EL DESVIO GUATIRE MIRANDA
                                </address>

                            </li>
                            <li>

                                <p class="distribuidor-rif">J403809852</p>
                                <p class="distribuidor-name"> INVERSIONES CONFIT BRION, C.A. </p>
                                <p class="distribuidor-client"> JUAN YABBOUR ARRAGE </p>
                                <address> AV N2 EDIFICIO CONJUNTO TURISTICO BRION PISO 1 APTO D18</address>

                            </li>
                            <li>

                                <p class="distribuidor-rif">J002642521</p>
                                <p class="distribuidor-name"> DISTRIBUIDORA CATEDRAL </p>
                                <p class="distribuidor-client"> NILTO VIEIRA </p>
                                <address> 3ERA TRANS.NTE BOLEITA SUR FTE. TALLERES DELIA CARACAS </address>
                            </li>
                            <li>

                                <p class="distribuidor-rif">J402812035 </p>
                                <p class="distribuidor-name"> DISTRIBUIDORA DAMASCA 2013,C.A </p>
                                <p class="distribuidor-client"> HUMBERTO DA SILVA </p>
                                <address> AVENIDA LAS PALMAS FINAL CON CALLE EL RIO, LOCAL GALPON NRO. 8. BOLEITA SUR. URB. BOLEITA </address>


                            </li>

                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="card-monagas">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-monagas" aria-expanded="false" aria-controls="collapse-monagas" data-estado="monagas">
                          Monagas
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-monagas" class="collapse" aria-labelledby="card-monagas" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul>
                            <li>
                                <p class="distribuidor-rif"> J303949827 </p>
                                <p class="distribuidor-name">INVERSIONES ROLDAN CA </p>
                                <p class="distribuidor-client"> OSCAR CELESTINO ROLDAN DAGGER</p>
                                <address>CALLE 7A CASA NRO 44 SECTOR LA MANGA SUBIENDO EL PICACHO</address>
                            </li>

                            <li>
                                <p class="distribuidor-rif"> J310615012 </p>
                                <p class="distribuidor-name">GOMET S DISTRIBUCION CA </p>
                                <p class="distribuidor-client"> LUIS MARQUES</p>
                                <address>AVENIDA BELLA VISTA CONJUNTO EMPRESARIAL MANROB SECTOR BELLA VISTA, MATURIN</address>
                            </li>

                        </ul>
                      </div>
                    </div>
                </div>

                {{-- <div class="card">
                    <div class="card-header" id="card-estadoaca">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-estadoaca" aria-expanded="false" aria-controls="collapse-estadoaca" data-estado="estadoaca">
                          Collapsible Group Item #3
                        </button>
                      </h2>
                    </div>
                    <div id="collapse-estadoaca" class="collapse" aria-labelledby="card-estadoaca" data-parent="#accordion-mapa">
                      <div class="card-body">
                        <ul></ul>
                      </div>
                    </div>
                </div> --}}

            </div>
        </div>
        <div class="col-md-6 col-12" id="mapa-container">
            {{-- <img src="{{asset('img/marcador.svg')}}" class="position-absolute" id="marker" alt="" height="25px" width="25px"> --}}

            <div class="leyenda">
                <ul>
                    {{-- <li>Ubicador</li> --}}
                    <li>Estado Seleccionado</li>
                    <li>Resto del Mapa</li>
                </ul>
            </div>
        </div>
    </div>

</div>



{{-- <div id="marker-fa"></div> --}}
@endsection

@section('scripts')

    <script>
        document.addEventListener('DOMContentLoaded',async function(){

            const svgUrl = {!! json_encode(asset('img/vzla.svg')) !!}
            const mapaContainer = document.getElementById('mapa-container')
            const mapaWrapper = document.getElementById('mapa-wrapper')
            const botones = document.querySelectorAll('[data-estado]')
            const marker = document.getElementById('marker')


            let request = await fetch(svgUrl)
            let svgText = await request.text()

            const parser = new DOMParser();
            const svgHtml = parser.parseFromString(svgText, "text/html");
            mapaContainer.appendChild(svgHtml.body.querySelector('svg'))

            let activeElement = [...document.querySelectorAll('.collapse')].filter(el=>el.classList.contains('show'))[0]

            let activeState = activeElement.parentElement.querySelector('button').dataset.estado

            const activeStateSvg = document.getElementById(activeState)

            activeStateSvg.classList.add('active-state')


            // let halfActiveY =  activeStateSvg.getBoundingClientRect().top - mapaContainer.getBoundingClientRect().top
            // // halfActiveY = halfActiveY < 0 ? halfActiveY * -1 : halfActiveY
            // let halfActiveX = activeStateSvg.getBoundingClientRect().left - mapaContainer.getBoundingClientRect().left
            // // halfActiveX = halfActiveX < 0 ? halfActiveX * -1 : halfActiveX


            // let percentageY = ((halfActiveY)*100)/mapaContainer.getBoundingClientRect().height
            // let percentageX = ((halfActiveX)*100)/mapaContainer.getBoundingClientRect().width

            // marker.style.top = `${halfActiveY}px`
            // marker.style.left = `${halfActiveX}px`


            botones.forEach(btn => btn.addEventListener('click',function(){

                let estado = document.getElementById(this.dataset.estado);

                document.querySelectorAll('.active-state').forEach(el=>el.classList.remove('active-state'))

                estado.classList.add('active-state')


            //     let halfActiveY =  estado.getBoundingClientRect().top - mapaContainer.getBoundingClientRect().top
            // // halfActiveY = halfActiveY < 0 ? halfActiveY * -1 : halfActiveY
            //     let halfActiveX = estado.getBoundingClientRect().left - mapaContainer.getBoundingClientRect().left


            //     let percentageY = ((halfActiveY)*100)/ document.querySelector('body').getBoundingClientRect().top
            //     let percentageX = ((halfActiveX)*100)/ document.querySelector('body').getBoundingClientRect().left

            //     marker.style.top = `${halfActiveY}px`
            //     marker.style.left = `${halfActiveY}px`

            }))


        })
    </script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function(){

        $('#send-button').click(function(e) {
            e.preventDefault();
            $("#send-button").attr('disabled', true);
            $('#form').submit();
        });

        // q chimbo me toco jquery para esto boostrap muevela con la v5
        $('#accordion-mapa').on('shown.bs.collapse', function (e) {
            let cardHeader = e.target.parentElement.querySelector('.card-header')
            cardHeader.classList.add('active-state')
        })

        $('#accordion-mapa').on('hidden.bs.collapse', function (e) {
            let cardHeader = e.target.parentElement.querySelector('.card-header')
            cardHeader.classList.remove('active-state')
        })
    })
  // do something…
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
