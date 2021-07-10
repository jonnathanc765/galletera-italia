@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    - Productos
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <div class="carousel">
                <div class="carousel__cell blue-color" data-maria="vainilla">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Maria Tentazione de vainilla</p>
                        <small class="d-block h5">Galleta dulce tipo María sabor a vainilla
                            Peso neto: 200 gr.
                            </small>
                        <button data-toggle="modal" data-target="#modal-galleta-tentazione"  class="btn mb-1">Saber más</button>
                    </div>
                </div>

                <div class="carousel__cell red-color" data-maria="chocolate">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Maria Tentazione Chocolate</p>
                        <small class="d-block h5">Galleta dulce tipo María sabor a chocolate
                            Peso neto: 200 gr.
                            </small>
                        <button data-toggle="modal" data-target="#modal-galleta-chocolate" class="btn mb-1">Saber más</button>
                    </div>
                </div>

                <div class="carousel__cell blue-color" data-maria="original">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Galleta dulce tipo María sabor a vainilla</p>
                        <small class="d-block h5">Peso neto: 150 gr.</small>
                        <button data-toggle="modal" data-target="#modal-galleta-original"  class="btn mb-1">Saber más</button>
                    </div>
                </div>


                <div class="carousel__cell red-color" data-maria="tentazione-grande">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Galleta María Tentazione molida y triturada sabor a chocolate</p>
                        <small class="d-block h5">Peso neto: 2.5 kg</small>
                        <button data-toggle="modal" data-target="#modal-galleta-tentazione-grande"  class="btn mb-1">Saber más</button>
                    </div>
                </div>

                <div class="carousel__cell blue-color" data-maria="vallina-grande">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Galleta María Tentazione molida y triturada sabor a vainilla</p>
                        <small class="d-block h5">Peso neto: 2.5 kg</small>
                        <button data-toggle="modal" data-target="#modal-galleta-vanilla-grande"  class="btn mb-1">Saber más</button>
                    </div>
                </div>

                <div class="carousel__cell red-color" data-maria="tentazione-pequena">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Galleta María Tentazione molida y triturada sabor a chocolate</p>
                        <small class="d-block h5">Peso neto: 500 g</small>
                        <button data-toggle="modal" data-target="#modal-galleta-tentazione-pequena"  class="btn mb-1">Saber más</button>
                    </div>
                </div>

                <div class="carousel__cell blue-color" data-maria="vanilla-pequena">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Galleta María Tentazione molida y triturada sabor a vainilla</p>
                        <small class="d-block h5">Peso neto: 500 g</small>
                        <button data-toggle="modal" data-target="#modal-galleta-vanilla-pequena"  class="btn mb-1">Saber más</button>
                    </div>
                </div>

          </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-galleta-chocolate" tabindex="-1" role="dialog" aria-labelledby="modal-galleta-chocolate-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-galleta-chocolate-title">María Tentazione Chocolate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="img-fluid d-block mx-auto" height="350px" src="{{asset('img/modal-chocolate.jpg')}}" alt="Maria Tentazione Chocolate">
            <p class="mb-1">Galleta dulce tipo María sabor a chocolate</p>
            <p class="mb-1"> <b> Peso neto:</b> 200 gr.</p>
            <p class="mb-1"> <b> Presentación:</b>
                <ul>
                    <li>Caja 24 Tubulares</li>
                    <li>Bulto 12 Tubulares</li>

                </ul>
            </p>
            <p class="mb-1"> <b> Contenido por tubular:</b> 10 unidades.</p>
            <p class="mb-1"> <b> Contenido por unidad:</b> 4 galletas.</p>
            <p class="mb-1"> <b> Vida útil:</b> 12 meses.</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('contact')}}" class="btn btn-primary">Obtener al mayor</a>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-galleta-tentazione" tabindex="-1" role="dialog" aria-labelledby="modal-galleta-tentazione-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-galleta-tentazione-title">María Tentazione Vainilla</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="img-fluid d-block mx-auto" height="350px" src="{{asset('img/modal-tentazione.png')}}" alt="Maria Tentazione Vainilla">
            <p class="mb-1">Galleta dulce tipo María sabor a vainilla</p>
            <p class="mb-1"> <b> Peso neto:</b> 200 gr.</p>
            <p class="mb-1"> <b> Presentación:</b>
                <ul>
                    <li>Caja 24 Tubulares</li>
                    <li>Bulto 12 Tubulares</li>

                </ul>
            </p>
            <p class="mb-1"> <b> Contenido por tubular:</b> 10 unidades.</p>
            <p class="mb-1"> <b> Contenido por unidad:</b> 4 galletas.</p>
            <p class="mb-1"> <b> Vida útil:</b> 12 meses.</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('contact')}}" class="btn btn-primary">Obtener al mayor</a>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-galleta-tentazione-grande" tabindex="-1" role="dialog" aria-labelledby="modal-galleta-tentazione-grande-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-galleta-tentazione-grande-title">Galleta María Tentazione molida y triturada sabor a chocolate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="img-fluid d-block mx-auto" height="350px" src="{{asset('img/tentazione-molida-grande.jpg')}}" alt="María Italia">
            <p class="mb-1">Galleta María Tentazione molida y triturada sabor a chocolate</p>
            <p class="mb-1"> <b> Peso neto:</b> 2.5 kg</p>
            <p class="mb-1"> <b> Vida útil:</b> 12 meses.</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('contact')}}" class="btn btn-primary">Obtener al mayor</a>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-galleta-vanilla-grande" tabindex="-1" role="dialog" aria-labelledby="modal-galleta-vanilla-grande-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-galleta-vanilla-grande-title">Galleta María Tentazione molida y triturada sabor a vainilla</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="img-fluid d-block mx-auto" height="350px" src="{{asset('img/vanilla-molida-grande.jpg')}}" alt="María Italia">
            <p class="mb-1">Galleta María Tentazione molida y triturada sabor a vainilla</p>
            <p class="mb-1"> <b> Peso neto:</b> 2.5 kg</p>
            <p class="mb-1"> <b> Vida útil:</b> 12 meses.</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('contact')}}" class="btn btn-primary">Obtener al mayor</a>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-galleta-vanilla-pequena" tabindex="-1" role="dialog" aria-labelledby="modal-galleta-vanilla-pequena-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-galleta-vanilla-pequena-title">Galleta María Tentazione molida y triturada sabor a vainilla</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="img-fluid d-block mx-auto" height="350px" src="{{asset('img/maria-vanilla-pequena.jpg')}}" alt="María Italia">
            <p class="mb-1">Galleta María Tentazione molida y triturada sabor a vainilla</p>
            <p class="mb-1"> <b> Peso neto:</b> 500 g</p>
            <p class="mb-1"> <b> Vida útil:</b> 12 meses.</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('contact')}}" class="btn btn-primary">Obtener al mayor</a>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-galleta-tentazione-pequena" tabindex="-1" role="dialog" aria-labelledby="modal-galleta-vanilla-tentazione-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-galleta-vanilla-tentazione-title">Galleta María Tentazione molida y triturada sabor a chocolate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="img-fluid d-block mx-auto" height="350px" src="{{asset('img/maria-tentazione-pequena.jpg')}}" alt="María Italia">
            <p class="mb-1">Galleta María Tentazione molida y triturada sabor a chocolate</p>
            <p class="mb-1"> <b> Peso neto:</b> 500 g</p>
            <p class="mb-1"> <b> Vida útil:</b> 12 meses.</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('contact')}}" class="btn btn-primary">Obtener al mayor</a>
        </div>
      </div>
    </div>
</div>


<div class="modal fade" id="modal-galleta-original" tabindex="-1" role="dialog" aria-labelledby="modal-galleta-original-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-galleta-original-title">María Italia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="img-fluid d-block mx-auto" height="350px" src="{{asset('img/modal-vainilla.png')}}" alt="María Italia">
            <p class="mb-1">Galleta dulce tipo María sabor a vainilla</p>
            <p class="mb-1"> <b> Peso neto:</b> 150 gr.</p>
            <p class="mb-1"> <b> Presentación:</b>
                <ul>
                    <li>Caja 24 Tubulares</li>
                    <li>Bulto 12 Tubulares</li>

                </ul>
            </p>
            <p class="mb-1"> <b> Contenido por tubular:</b> 10 unidades.</p>
            <p class="mb-1"> <b> Contenido por unidad:</b> 4 galletas.</p>
            <p class="mb-1"> <b> Vida útil:</b> 12 meses.</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('contact')}}" class="btn btn-primary">Obtener al mayor</a>
        </div>
      </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('js/carousel-products.js') }}" defer></script>

@endsection
