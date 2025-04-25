<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.pages.inicio');
})->name('inicio');

Route::get('/Series', function () {
    return view('website.pages.series');
})->name('series');

Route::get('/Semanal', function () {
    return view('website.pages.semanal');
})->name('semanal');

Route::get('/Favoritos', function () {
    return view('website.pages.favoritos');
})->name('favoritos');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
