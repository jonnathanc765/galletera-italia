@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    Nosotros
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <div class="carousel">
                <div class="carousel__cell" data-maria="vainilla">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Maria Tentazione de vainilla</p>
                        <small class="d-block h5">Galleta dulce tipo María sabor a vainilla
                            Peso neto: 200 gr.
                            </small>
                        <button class="btn btn-primary mb-1">Obtener ahora</button>
                    </div>
                </div>
                <div class="carousel__cell" data-maria="chocolate">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Maria Tentazione Chocolate</p>
                        <small class="d-block h5">Galleta dulce tipo María sabor a chocolate
                            Peso neto: 200 gr.
                            </small>
                        <button class="btn mb-1">Obtener ahora</button>
                    </div>
                </div>
                <div class="carousel__cell" data-maria="original">
                    <div class="carousel__cell-content">

                        <p class="mb-2 h2">Galleta dulce tipo María sabor a vainilla</p>
                        <small class="d-block h5">Peso neto: 150 gr.</small>
                        <button class="btn mb-1">Obtener ahora</button>
                    </div>
                </div>

          </div>

        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('js/carousel-products.js') }}"></script>

@endsection
