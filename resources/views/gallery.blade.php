@extends('layouts.app')

{{-- Para la etiqueta title  --}}
@section('title')
    Nosotros
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="carousel-gallery"></div>
        </div>
    </div>
    <div class="row slogan-container">
        <div class="col-12 slogan__main">
            <p class="h1">Galletas <span>MARÍA</span></p>
            <p class="h2">QUE ACOMPAÑAN <span>tus dulces momentos</span></p>
            <button class="btn btn-primary">Contactanos</button>
        </div>
    </div>
</div>
@endsection


@section('scripts')
{{-- <script src="{{ asset('js/carousel-gallery.js') }}"></script> --}}

@endsection
