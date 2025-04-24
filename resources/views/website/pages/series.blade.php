@extends('website.layouts.app')
@section('titulo', 'Series - SeriesSinLímites')

@section('css')
    @include('website.layouts.cssOtros')
@endsection

@section('main')
    <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Series</h2>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
            <div class="col">
                <a href="enlace_a_serie_alfa.html" class="card-link-wrapper" data-title="Serie Reciente Alfa"
                    data-description="Esta es una breve descripción de la Serie Reciente Alfa. Aquí puedes incluir algunos detalles interesantes sobre la trama, los personajes principales o el género de la serie.">
                    <div class="card series-info-card h-100">
                        <div class="ratio-container">
                            <img src="{{asset('websiteBuild/img/logo/logo.png')}}" class="card-img-top object-fit-cover" alt="Serie Reciente Alfa">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h6 class="card-title mb-1 fw-bold text-truncate">Serie Reciente Alfa</h6>
                                <p class="card-text small text-muted mb-1">
                                    <i class="fas fa-tv me-1"></i> <span class="fw-semibold">Temporadas:</span> 3
                                    <br>
                                    <i class="fas fa-list-ol me-1"></i> <span class="fw-semibold">Capítulos:</span> 45
                                    <br>
                                    <i class="fas fa-calendar me-1"></i> <span class="fw-semibold">Año y
                                        Mes:</span> 12/2023
                                </p>
                            </div>
                            <div class="mt-2">
                                <span class="badge bg-success">En Emisión</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    @include('website.layouts.seriesTooltip')
@endsection

@section('SocialOopcion')
    @include('website.layouts.opcionFiltro')
@endsection
