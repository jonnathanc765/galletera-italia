
<header class="container-fluid p-0">

    <nav class="navbar navbar-expand-lg bg-primary">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-block d-md-none" href="#">
            <img src="{{ asset('img/galleteraitalialogo.png') }}" height="30" width="30" alt="tag">
        </a>

        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav w-100">
                <li class="nav-item {{request()->is('/') ? 'active-page' : ''}}">
                    <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{request()->is('nosotros') ? 'active-page' : ''}}">
                    <a class="nav-link" href="{{route('about')}}">Nosotros</a>
                </li>
                <li class="nav-item {{request()->is('productos') ? 'active-page' : ''}}">
                    <a class="nav-link" href="{{route('products')}}">Productos</a>
                </li>
                <li class="nav-item logo">
                    <img src="{{ asset('img/galleteraitalialogo.png') }}" alt="tag">

                </li>
                <li class="nav-item {{request()->is('galeria') ? 'active-page' : ''}}">
                    <a class="nav-link" href="{{route('gallery')}}">Galeria</a>
                </li>
                <li class="nav-item {{request()->is('contacto') ? 'active-page' : ''}}">
                    <a class="nav-link" href="{{route('contact')}}">Contacto</a>
                </li>
                {{-- <li class="nav-item form">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </li> --}}

            </ul>

        </div>
    </nav>

</header>

