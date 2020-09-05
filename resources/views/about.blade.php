@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    Nosotros
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-4 offset-0">
            <p class="h2">
                Tradición galletera
            </p>
            <p>
                En Barinas, Venezuela, existe una familia de galleteros conformada por cuatro hermanos que han trabajado y han crecido con el pasar de los años para satisfacer las necesidades de niños, jóvenes y adultos amantes de las galletas en todo país. Todo comenzó con una empresa llamada Bizcochería Italia, la primera de todas las galleteras que se conforman en este Estado llanero, fundada por el padre de estos hermanos emprendedores.Esta familia, a través de los años, se fue abriendo camino para sub dividir la empresa matriz en otro conjunto de empresas donde cada uno de ellos se especializaba en artículos de confitería diversos, pero siempre cuidando la tradición principal de la familia, de llevar productos alimenticios que agradaran de un dulce momento a su consumidor final.
            </p>

            <p class="h2">
                Galletas María Italia
            </p>
            <p>
                Fue entonces como surgió a mediados del año 2.000 en una de estas empresas hermanas llamada Industrias Alimenticias Italia, C.A. la idea de fabricar, comercializar y distribuir un producto que se estimaba que iba a encajar muy bien en el mercado nacional, el mismo fue denominado “Galletas María Italia” el cual resultó ser todo un éxito dentro de la gama de productos que INAICA ofrecía.
            </p>

            <p class="h2">
                Nacimiento de Galletera Italia
            </p>
            <p>
                Debido a esta creciente demanda de galletas María y en vista de lanecesidad de estos hermanos de seguir diversicando las empresas, se creó entonces en el año 2015 una nueva fábrica que obtuvo por nombre GALLETERA ITALIA, C.A.  con la intensión de abastecer esta gran demanda de galletas María que solo una empresa no podía cubrir por si sola. Razón por la cuál INAICA decide atribuir a esta nueva empresa hermana su marca comercial, María Italia.
            </p>

            <p class="h2">Bienvenida deMaría Tentazione</p>
            <p>La misma fue posible gracias a la adquisición de una nueva línea de producción automatizada por parte de Galletera Italia, C.A.  catalogada como la línea de galletas María más grande en toda Venezuela. La cual sirvió no solo para esta marca estrella ya fuertemente establecida, sino para la creación de nuevas marcas que fueron incluidas en el catalogo de productos como son: las galletas María Tentazione sabor vainilla y María Tentazione sabor chocolate a comienzos del año 2019</p>

            <p class="h2">Esfuerzo y dedicación</p>
            <p>Y es de tal forma que esta familia debido al esfuerzo y dedicación logrado a través de los años que han podido brindar a sus consumidores un excelente producto de calidad que ha transcendido a través del tiempo con su hermosa cultura y valor familiar.</p>


        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 offset-0 offset-md-4">
            <div class="row">
                <div class="col-6">

                    <p class="h2">Misión</p>
                    <p>Elaborar artículos de galletería dulces y salados a través de procesos de manufactura con personal altamente capacitado y maquinaria automatizada para comercializar en el mercado venezolano con ayuda de distribuidores y aliados comerciales para brindar así una grata experiencia al consumidor final con productos de alta calidad.</p>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/galleta.jpg') }}" height="150" width="150" alt="tag">

                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('img/galleta.jpg') }}" height="150" width="150" alt="tag">

                </div>
                <div class="col-6">

                    <p class="h2">
                        Visión
                    </p>
                    <p>Expandir los canales de distribución a mercados internacionales con ayuda de nuevos aliados comerciales en territoriosextranjeros para lograr una consolidación de la marca enmercados más exigentes. Representando además la producción nacional con artículos que llenen de orgullo el gentilicio venezolano.</p>
                </div>



            </div>
            <div class="row">
                <div class="col-6">

                    <p class="h2">
                        Valores
                    </p>
                    <p>
                        Comunicación:La clave para la realización de todas nuestras operaciones se deben a la buena comunicación que existe entre los distintosdepartamentos que conforman la empresa, así como también con nuestros proveedores y aliados comerciales. Lacomunicación es parte fundamental del desarrollo de cada una de las actividades para lograr los objetivos organizacionales.Respeto:Para crear un ambiente laboral armónico y adecuadoproporcionamos un trato de respeto entre los diferentes puestos de trabajos desde la alta gerencia hasta los puestos queconforman la base de la estructura organizacional.Constancia: En Galletera Italia, C.A. trabajamos con dedicación día a díabrindando nuestro mejor esfuerzo para ofrecer productos decalidad que estén a su alcance siempre que sean necesarios.Familia:Debido a que Galletera Italia, C.A proviene de una culturafamiliar consolidamos este valor como parte de nosotros,siguiendo las costumbres que se han llevado desde el inicio de nuestras operaciones
                    </p>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/galleta.jpg') }}" height="150" width="150" alt="tag">

                </div>


            </div>
        </div>
    </div>
</div>
@endsection