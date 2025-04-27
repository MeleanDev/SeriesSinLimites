<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\SerieClass;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class SerieController extends Controller
{
    private $serieClass;

    public function __construct(SerieClass $serieClass)
    {
        $this->serieClass = $serieClass;
    }

    public function index(): View
    {
        return view('software.pages.Series');
    }

    // public function Lista()
    // {
    // }

    // public function Ver($id): JsonResponse
    // {
    // }

    // public function Crear(Request $request): JsonResponse
    // {
        
    // }

    // public function Actualizar(Request $request, $id): JsonResponse
    // {
    //     // Implementar lógica para actualizar una serie
    // }

    // public function Eliminar($id): JsonResponse
    // {
    //     // Implementar lógica para eliminar una serie
    // }
}
