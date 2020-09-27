@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    - Nosotros
@endsection


@section('content')
<div class="container-fluid about">

    <div class="row first-row about__timeline">
        <div class="col-12 col-md-6 offset-md-3 offset-0 about__timeline--main-column">
            {{-- <p class="h2">
                Tradición galletera
            </p> --}}
            <img  data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/tradicion-galletera.png') }}" alt="Tradición galletera" class="img-fluid d-block mx-auto mb-4">
            <p  data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out">
                En Barinas, Venezuela, existe una familia de galleteros conformada por cuatro hermanos que han trabajado y han crecido con el pasar de los años para satisfacer las necesidades de niños, jóvenes y adultos amantes de las galletas en todo país. Todo comenzó con una empresa llamada Bizcochería Italia, la primera de todas las galleteras que se conforman en este Estado llanero, fundada por el padre de estos hermanos emprendedores. Esta familia, a través de los años, se fue abriendo camino para sub dividir la empresa matriz en otro conjunto de empresas donde cada uno de ellos se especializaba en artículos de confitería diversos, pero siempre cuidando la tradición principal de la familia, de llevar productos alimenticios que agradaran de un dulce momento a su consumidor final.
            </p>
            <img data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/mapa.png') }}" alt="Tradición galletera" class="img-fluid d-block mx-auto mb-4">

            {{-- <p class="h2">
                Galletas María Italia
            </p> --}}
            <img data-sal="slide-right" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/galletas.png') }}" alt="Galletas María Italia" class="img-fluid d-block mx-auto mb-4">

            <p  data-sal="slide-right" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out">
                Fue entonces como surgió a mediados del año 2.000 en una de estas empresas hermanas llamada Industrias Alimenticias Italia, C.A. la idea de fabricar, comercializar y distribuir un producto que se estimaba que iba a encajar muy bien en el mercado nacional, el mismo fue denominado “Galletas María Italia” el cual resultó ser todo un éxito dentro de la gama de productos que INAICA ofrecía.
            </p>
            <img data-sal="slide-right" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/camion.png') }}" alt="Galletas María Italia" class="img-fluid d-block mx-auto mb-4">


            {{-- <p class="h2">
                Nacimiento de Galletera Italia
            </p> --}}
            <img data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/nacimiento.png') }}" alt="Nacimiento de Galletera Italia" class="img-fluid d-block mx-auto mb-4">

            <p  data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out">
                Debido a esta creciente demanda de galletas María y en vista de la necesidad de estos hermanos de seguir diversificando las empresas, se creó entonces en el año 2015 una nueva fábrica que obtuvo por nombre GALLETERA ITALIA, C.A.  con la intensión de abastecer esta gran demanda de galletas María que solo una empresa no podía cubrir por si sola. Razón por la cuál INAICA decide atribuir a esta nueva empresa hermana su marca comercial, María Italia.
            </p>
            <img data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/pila-galletas.png') }}" alt="Nacimiento de Galletera Italia" class="img-fluid d-block mx-auto mb-4">


            {{-- <p class="h2">Bienvenida deMaría Tentazione</p> --}}
            <img data-sal="slide-right" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/bienvenida.png') }}" alt="Bienvenida de María Tentazione" class="img-fluid d-block mx-auto mb-4">

            <p  data-sal="slide-right" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out">La misma fue posible gracias a la adquisición de una nueva línea de producción automatizada por parte de Galletera Italia, C.A.  catalogada como la línea de galletas María más grande en toda Venezuela. La cual sirvió no solo para esta marca estrella ya fuertemente establecida, sino para la creación de nuevas marcas que fueron incluidas en el catalogo de productos como son: las galletas María Tentazione sabor vainilla y María Tentazione sabor chocolate a comienzos del año 2019</p>
            <img data-sal="slide-right" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/libro.png') }}" alt="Bienvenida de María Tentazione" class="img-fluid d-block mx-auto mb-4">

            {{-- <p class="h2">Esfuerzo y dedicación</p> --}}
            <img data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/esfuerzo-dedicacion.png') }}" alt="Esfuerzo y dedicación" class="img-fluid d-block mx-auto mb-4">

            <p  data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out">Y es de tal forma que esta familia debido al esfuerzo y dedicación logrado a través de los años que han podido brindar a sus consumidores un excelente producto de calidad que ha transcendido a través del tiempo con su hermosa cultura y valor familiar.</p>
            <img data-sal="slide-left" data-sal-delay="300" data-sal-duration="700" data-sal-easing="ease-in-out" src="{{ asset('img/galleta-corazon.png') }}" alt="Esfuerzo y dedicación" class="img-fluid d-block mx-auto mb-4">


        </div>
    </div>
    <div class="row about__info">
        <div class="col-12">

            <div class="row about__info-mision">
                <div class="wrapper-big">

                    <div data-sal="slide-right"  data-sal-delay="500" data-sal-duration="700"
                        data-sal-easing="ease-out-back" class="col-12 col-lg-6">

                        <p class="h2">Misión</p>
                        <p>Elaborar artículos de galletería dulces y salados a través de procesos de manufactura con personal altamente capacitado y maquinaria automatizada para comercializar en el mercado venezolano con ayuda de distribuidores y aliados comerciales para brindar así una grata experiencia al consumidor final con productos de alta calidad.</p>
                    </div>
                </div>

            </div>

            <div class="row about__info-vision">
                <div class="wrapper-big">

                    <div data-sal="slide-left" data-sal-delay="500" data-sal-duration="700"
                        data-sal-easing="ease-out-back" class="col-12">

                        <p class="h2">
                            Visión
                        </p>
                        <p>Expandir los canales de distribución a mercados internacionales con ayuda de nuevos aliados comerciales en territorios extranjeros para lograr una consolidación de la marca en mercados más exigentes. Representando además la producción nacional con artículos que llenen de orgullo el gentilicio venezolano.</p>
                    </div>
                </div>




            </div>

            <div class="row about__info-valores">
                <div class="wrapper-big">

                    <div class="col-12 col-lg-6" data-sal="slide-right"  data-sal-delay="500" data-sal-duration="700"
                        data-sal-easing="ease-out-back" >

                        <p class="h2">
                            Valores
                        </p>
                        <ul>
                            <li>
                                <span class="d-block">Comunicación</span> La clave para la realización de todas nuestras operaciones se deben a la buena comunicación que existe entre los distintos departamentos que conforman la empresa, así como también con nuestros proveedores y aliados comerciales. La comunicación es parte fundamental del desarrollo de cada una de las actividades para lograr los objetivos organizacionales.
                            </li>
                            <li>
                                <span class="d-block">Respeto</span> Para crear un ambiente laboral armónico y adecuado proporcionamos un trato de respeto entre los diferentes puestos de trabajos desde la alta gerencia hasta los puestos que conforman la base de la estructura organizacional.
                            </li>
                            <li>
                                <span class="d-block">Constancia</span> En Galletera Italia, C.A. trabajamos con dedicación día a día brindando nuestro mejor esfuerzo para ofrecer productos de calidad que estén a su alcance siempre que sean necesarios.
                            </li>
                            <li>
                                <span class="d-block">Familia</span> Debido a que Galletera Italia, C.A proviene de una cultura familiar consolidamos este valor como parte de nosotros, siguiendo las costumbres que se han llevado desde el inicio de nuestras operaciones.
                            </li>

                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection

