<?php

use App\Http\Controllers\Admin\AdministradorController;
use App\Http\Controllers\Admin\AlojamientoController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\SerieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::middleware('auth')->prefix('Sistema')->group(function () {

        Route::get('Dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        // Series
        Route::controller(SerieController::class)->group(function () {
            route::get('Series', 'index')->name('sistema.series');
            route::get('Series/Lista', 'Lista'); 
            route::get('Series/Lista/{id}', 'Ver');
            route::post('Series', 'Crear');
            route::post('Series/Actualizar/{id}', 'Actualizar');
            route::delete('Series/{id}', 'Eliminar');
        });
        
        Route::get('Series-Capitulos', function () {
            return view('software.pages.Capitulos');
        })->name('sistema.capitulos');

        // Categorias
        Route::controller(CategoriaController::class)->group(function () {
            route::get('Series-Categorias', 'index')->name('sistema.categorias');
            route::get('Series-Categorias/Lista', 'Lista'); 
            route::get('Series-Categorias/Lista/{id}', 'Ver');
            route::post('Series-Categorias', 'Crear');
            route::post('Series-Categorias/Actualizar/{id}', 'Actualizar');
            route::delete('Series-Categorias/{id}', 'Eliminar');
        });

        // Alojamiento
        Route::controller(AlojamientoController::class)->group(function () {
            route::get('Series-Alojamientos', 'index')->name('sistema.alojamientos');
            route::get('Series-Alojamientos/Lista', 'Lista'); 
            route::get('Series-Alojamientos/Lista/{id}', 'Ver');
            route::post('Series-Alojamientos', 'Crear');
            route::post('Series-Alojamientos/Actualizar/{id}', 'Actualizar');
            route::delete('Series-Alojamientos/{id}', 'Eliminar');
        });

        // Administradores
        Route::controller(AdministradorController::class)->group(function () {
            route::get('Administradores', 'index')->name('sistema.administradores');
            route::get('Administradores/Lista', 'Lista'); 
            route::get('Administradores/Lista/{id}', 'Ver');
            route::post('Administradores', 'Crear');
            route::post('Administradores/Actualizar/{id}', 'Actualizar');
            route::delete('Administradores/{id}', 'Eliminar');
        });

        // Edit Perfil
        Route::get('Perfil', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('Perfil', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('Perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

