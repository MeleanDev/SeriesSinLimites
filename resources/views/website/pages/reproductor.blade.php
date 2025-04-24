@extends('website.layouts.app')
@section('titulo', 'Reproductor - SeriesSinLímites')

@section('css')
    @include('website.layouts.cssOtros')
@endsection

@section('main')
    <section class="mb-5">
        <h2 class="mb-3 text-light fw-bold" id="episodeTitle">La Que Se Avecina - Capítulo 4</h2>

        <div class="mb-3">
            <h6 class="text-light fw-semibold mb-2">Seleccionar Servicio:</h6>
            <div class="btn-group" role="group" aria-label="Seleccionar servicio de video">
                <button type="button" class="btn btn-sm btn-outline-info">Mega</button>
                <button type="button" class="btn btn-sm btn-outline-info">Streamwish</button>
                <button type="button" class="btn btn-sm btn-outline-info">VOE</button>
            </div>
        </div>

        <div class="ratio ratio-16x9 bg-dark rounded shadow-sm overflow-hidden mb-3" id="videoPlayerContainer">
            <iframe src="URL_DEL_REPRODUCTOR" title="Reproductor de Video" frameborder="0" allowfullscreen
                style="width: 100%; height: 100%;"></iframe>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3 video-navigation">
            <div>
                <a href="enlace_al_menu_de_la_serie.html" class="btn btn-info btn-sm rounded-pill">
                    <i class="fas fa-list me-1"></i> Menú de Serie
                </a>
            </div>
            <div>
                <button class="btn btn-primary btn-sm rounded-pill me-2">
                    <i class="fas fa-step-backward me-1"></i> Anterior
                </button>
                <button class="btn btn-primary btn-sm rounded-pill me-2">
                    Siguiente <i class="fas fa-step-forward ms-1"></i>
                </button>
            </div>
        </div>
    </section>
    @include('website.layouts.seriesTooltip')
@endsection

@section('SocialOopcion')
    @include('website.layouts.redesSociales')
@endsection
