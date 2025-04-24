@extends('website.layouts.app')
@section('titulo', 'Inicio - Series y Más')

@section('css')
    @include('website.layouts.cssIndex')
@endsection

@section('main')
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade mb-4" data-bs-ride="carousel" style="height: 400px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 100%;">
            <div class="carousel-item active bg-dark overflow-hidden" style="height: 100%;">
                <img src="{{asset('websiteBuild/img/img1.jpeg')}}" class="d-block w-100 object-fit-cover" alt="Serie Destacada 1"
                    style="opacity: 0.6; object-position: center center; height: 100%;">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-center">
                    <h3 class="mb-2 fw-bold text-light">El Nombre de la Primera Serie Épica</h3>
                    <p class="mb-3 text-light fs-5">Descubre un mundo de fantasía y aventura sin igual.</p>
                    <a href="enlace_serie_1.html" class="btn btn-md rounded-pill text-light carousel-button"
                        style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);">Ver Serie</a>
                </div>
            </div>
            <div class="carousel-item bg-dark overflow-hidden" style="height: 100%;">
                <img src="{{asset('websiteBuild/img/img2.jpg')}}" class="d-block w-100 object-fit-cover" alt="Serie Destacada 2"
                    style="opacity: 0.6; object-position: center center; height: 100%;">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-center">
                    <h3 class="mb-2 fw-bold text-light">Aventura sin Fin: Temporada Nueva</h3>
                    <p class="mb-3 text-light fs-5">La nueva temporada ha llegado con más emoción y
                        misterio.</p>
                    <a href="enlace_serie_2.html" class="btn btn-md rounded-pill text-light carousel-button"
                        style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);">Ver Serie</a>
                </div>
            </div>
            <div class="carousel-item bg-dark overflow-hidden" style="height: 100%;">
                <img src="{{asset('websiteBuild/img/img3.jpg')}}" class="d-block w-100 object-fit-cover" alt="Serie Destacada 3"
                    style="opacity: 0.6; object-position: center center; height: 100%;">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-center">
                    <h3 class="mb-2 fw-bold text-light">El Regreso de los Clásicos</h3>
                    <p class="mb-3 text-light fs-5">Una serie que marcó historia, ahora disponible en alta
                        definición.</p>
                    <a href="enlace_serie_3.html" class="btn btn-md rounded-pill text-light carousel-button"
                        style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);">Ver Serie</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <section class="mb-5">
        <h2>Últimos Capítulos Agregados</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-4">
            <div class="col">
                <a href="enlace_a_la_serie_f.html" class="card-link-wrapper" data-title="Nombre de la Serie F"
                    data-description="Descubre los más recientes y emocionantes capítulos de Nombre de la Serie F. ¡Mantente al día con cada nueva entrega!">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{asset('websiteBuild/img/logo/logosinFondo.png')}}" class="card-img-top" alt="Serie Ejemplo 6"
                            style="object-fit: cover; height: 150px;">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h6 class="card-title mb-0">Nombre de la Serie F</h6>
                            <br>
                            <span class="badge bg-info mt-auto">Cap 19</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Últimas Series Agregadas</h2>
            <div>
                <a href="#" class="btn btn-outline-secondary">Ver todas las series</a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-4">
            <div class="col">
                <a href="enlace_a_serie_alfa.html" class="card-link-wrapper" data-title="Serie Reciente Alfa"
                    data-description="Descubre la emocionante trama y los personajes inolvidables de Serie Reciente Alfa. ¡No te pierdas ni un episodio!">
                    <div class="card h-100">
                        <div class="ratio-container">
                            <img src="{{asset('websiteBuild/img/logo/logo.png')}}" class="card-img-top object-fit-cover" alt="Serie Nueva 1">
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0">Serie Reciente Alfa</h6>
                            <span class="badge bg-success mt-1">En Emisión</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    @include('website.layouts.seriesTooltip')
@endsection

@section('SocialOopcion')
    @include('website.layouts.redesSociales')
@endsection