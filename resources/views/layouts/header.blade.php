
<style>
    ul.navbar-nav.mr-auto{
        align-items: flex-start;
        height: 40px;
    }

    header{
        margin-bottom: 15vh
    }
</style>
<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-none" href="#">
            <img src="{{ asset('img/galleteraitalialogo.png') }}" height="30" width="30" alt="tag">
        </a>

        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products')}}">Productos</a>
                </li>
                <li class="nav-item">
                    <img src="{{ asset('img/galleteraitalialogo.png') }}" height="150" width="30" alt="tag">

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gallery')}}">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contacto</a>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </li>

            </ul>

        </div>
    </nav>

</header>
