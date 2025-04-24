<header class="bg-dark py-3">
    <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
        <a class="navbar-brand" href="{{route('inicio')}}">
            <img src="{{asset('websiteBuild/img/logo/logosinFondo.png')}}" alt="Logo" class="logo me-2">
            <span class="fs-5">SeriesSinLímites</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() === 'inicio') active @endif" aria-current="page" href="{{route('inicio')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() === 'series') active @endif" href="{{route('series')}}">Series</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() === 'semanal') active @endif" href="{{route('semanal')}}">Programacion Semanal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() === 'favoritos') active @endif" href="{{route('favoritos')}}">Favoritos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Panel Admi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fas fa-user me-1"></i> Iniciar Sesión
                    </a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control rounded-pill me-2" required type="search" placeholder="Buscar">
                <button class="btn btn-primary-dark rounded-circle px-3" type="submit"><i class="fa fa-search"
                        aria-hidden="true"></i></button>
            </form>
        </div>
    </nav>
</header>