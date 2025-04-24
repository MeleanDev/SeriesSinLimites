<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/Dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/Perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/Perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/Perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
