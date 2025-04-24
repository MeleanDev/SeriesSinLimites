@extends('website.layouts.app')
@section('titulo', 'Informacion Serie - SeriesSinLímites')

@section('css')
    @include('website.layouts.cssOtros')
@endsection

@section('main')
    <section class="mb-5">
        <div class="row">
            <div class="col-md-4">
                <img src="img/img3.jpg" alt="Portada de Serie Ejemplo" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="fw-bold mb-0">Título de la Serie Ejemplo</h2>
                    <button class="btn btn-outline-warning btn-sm rounded-pill" title="Guardar a Favoritos">
                        <i class="fas fa-heart"></i> Favorito
                    </button>
                </div>
                <p class="text mb-2">
                    <i class="fas fa-calendar me-1"></i> Lanzamiento: Abril de 2024
                </p>
                <p class="lead mb-2">
                    Esta es una descripción detallada de la serie. Aquí puedes incluir la sinopsis, el género, los
                    creadores, los actores principales y cualquier otra información relevante que quieras compartir con los
                    espectadores. Puedes hacerla tan larga como sea necesario para dar una buena idea de qué trata la serie.
                </p>
                <p class="mb-3">
                    <span class="fw-bold me-2">Géneros:</span>
                    <span class="badge bg-primary me-1">Drama</span>
                    <span class="badge bg-success me-1">Comedia</span>
                    <span class="badge bg-info me-1">Romance</span>
                    <span class="badge bg-warning me-1 text-dark">Fantasía</span>
                </p>
                <p class="mb-2"><span class="fw-bold">Temporadas:</span> 3</p>
                <p class="mb-4"><span class="fw-bold">Capítulos:</span> 45</p>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0">Lista de Capítulos</h5>
                    <select class="form-select form-select-sm w-auto shadow-sm" id="seasonSelector">
                        <option value="1">Temporada 1</option>
                        <option value="2">Temporada 2</option>
                        <option value="3">Temporada 3</option>
                    </select>
                </div>

                <div id="episodesList">
                    <ul class="list-group season-1">
                        <li class="list-group-item"><a href="enlace_capitulo_s1_e1.html"
                                class="text-decoration-none">Temporada 1, Capítulo 1: El Comienzo</a></li>
                        <li class="list-group-item"><a href="enlace_capitulo_s1_e2.html"
                                class="text-decoration-none">Temporada 1, Capítulo 2: Nuevos Desafíos</a></li>
                        <li class="list-group-item"><a href="enlace_capitulo_s1_e3.html"
                                class="text-decoration-none">Temporada 1, Capítulo 3: El Secreto Revelado</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('website.layouts.seriesTooltip')
@endsection

@section('SocialOopcion')
    @include('website.layouts.redesSociales')
@endsection
