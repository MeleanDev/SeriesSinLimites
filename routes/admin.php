<?php

use App\Http\Controllers\Admin\CategoriaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

Route::middleware('auth')->prefix('Sistema')->group(function () {

        Route::get('Dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('Series', function () {
            return view('software.pages.Series');
        })->name('sistema.series');

        Route::controller(CategoriaController::class)->group(function () {
            route::get('Series-Categorias', 'index')->name('sistema.categorias');
            route::get('Series-Categorias/Lista', 'lista'); 
            route::get('Series-Categorias/Lista/{id}', 'ver')->name('sistema.categorias.ver');
            route::post('Series-Categorias', 'crear')->name('sistema.categorias.crear');
            route::post('Series-Categorias/Actualizar', 'actualizar')->name('sistema.categorias.actualizar');
            route::delete('Series-Categorias/{id}', 'eliminar')->name('sistema.categorias.eliminar');
        });

        Route::get('Series-Capitulos', function () {
            return view('software.pages.Capitulos');
        })->name('sistema.capitulos');

        Route::get('Series-Alojamientos', function () {
            return view('software.pages.Alojamientos');
        })->name('sistema.alojamientos');

        Route::get('Administradores', function () {
            return view('software.pages.Administradores');
        })->name('sistema.administradores');

        // Edit Perfil
        Route::get('Perfil', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('Perfil', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('Perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

