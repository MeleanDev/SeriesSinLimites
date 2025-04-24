@extends('website.layouts.app')
@section('titulo', 'Programacion Semanal - SeriesSinLímites')

@section('css')
    @include('website.layouts.cssOtros')
@endsection

@section('main')
<section class="mb-5">
    <h2 class="mb-3">Programación Semanal</h2>
    <div class="d-flex weekly-schedule-buttons-container mb-4">
        <button class="btn btn-outline-primary btn-lg weekly-schedule-button"
            data-day="lunes">Lunes</button>
        <button class="btn btn-outline-primary btn-lg weekly-schedule-button"
            data-day="martes">Martes</button>
        <button class="btn btn-outline-primary btn-lg weekly-schedule-button"
            data-day="miercoles">Miércoles</button>
        <button class="btn btn-outline-primary btn-lg weekly-schedule-button"
            data-day="jueves">Jueves</button>
        <button class="btn btn-outline-primary btn-lg weekly-schedule-button"
            data-day="viernes">Viernes</button>
        <button class="btn btn-outline-primary btn-lg weekly-schedule-button"
            data-day="sabado">Sábado</button>
        <button class="btn btn-outline-primary btn-lg weekly-schedule-button"
            data-day="domingo">Domingo</button>
    </div>
    <div id="weeklyScheduleResults">
        <h3>Miércoles</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-2">
            <div class="col">
                <div class="card card-sm h-100 bg-secondary text-light">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="{{ asset('websiteBuild/img/img1.jpeg') }}" class="img-fluid rounded-start object-fit-cover h-100"
                                alt="Serie Delta">
                        </div>
                        <div class="col-8">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h6 class="card-title mb-0 fw-bold text-truncate">Serie Delta</h6>
                                <p class="card-text small mb-0">S2 E05</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @include('website.layouts.seriesTooltip')
@endsection

@section('SocialOopcion')
    @include('website.layouts.redesSociales')
@endsection
