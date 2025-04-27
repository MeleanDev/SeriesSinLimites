<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link rel="icon" href="{{ asset('websiteBuild/img/logo/logosinFondo.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="SeriesSinLímites - Tu portal de series sin restricciones. Encuentra tus series favoritas y mantente al día con los últimos episodios.">
    <meta name="keywords" content="series, streaming, entretenimiento, películas, TV, series online">
    <meta name="author" content="SeriesSinLímites">
    <meta name="copyright" content="SeriesSinLímites 2025">
    <meta name="robots" content="index, follow, noarchive">
    <meta name="theme-color" content="#00adb5">
    <meta property="og:title" content="SeriesSinLímites - Tu portal de series sin restricciones">
    <meta property="og:description"
        content="Encuentra tus series favoritas y mantente al día con los últimos episodios.">
    <meta property="og:image" content="{{ asset('websiteBuild/img/logo/logosinFondo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="Logo de SeriesSinLímites">
    <meta property="og:image:width" content="1200">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SeriesSinLímites">
    <meta property="og:locale" content="es_ES">
    <meta property="og:locale:alternate" content="en_US">
    <link rel="stylesheet" href="{{ asset('websiteBuild/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @yield('css')
</head>

<body>
    <!-- Header y Menu -->
    @include('website.layouts.header')
    <!-- Fin Header y Menu -->

    @auth
    @else
        <!-- Modales Login y register -->
        @include('website.layouts.modalLogin')

        @include('website.layouts.modalRegistro')
        <!-- Fin Modales Login y register -->
    @endauth

    <!-- Main, Redes Sociales y Publicidad -->
    <div class="container-fluid">
        <div class="row">

            <!-- Espacio publicitario -->
            @include('website.layouts.publicidad')
            <!-- Fin Espacio publicitario -->

            <!-- Main -->
            <main class="col-12 col-md-8 my-4 px-2">
                @yield('main')
            </main>
            <!-- Fin Main -->

            <!-- Redes Sociales -->
            @yield('SocialOopcion')
            <!-- Fin Redes Sociales -->
        </div>
    </div>
    <!-- Fin Main, Redes Sociales y Publicidad -->

    <!-- Footer -->
    @include('website.layouts.footer')
    <!-- Fin Footer -->

    <script src="{{ asset('websiteBuild/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('websiteBuild/js/main.js') }}"></script>
</body>

</html>
