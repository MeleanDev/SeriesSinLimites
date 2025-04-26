<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlojamientoRequest;
use App\Models\Alojamiento;
use App\Service\Admin\AlojamientoClass;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class AlojamientoController extends Controller
{
    private $alojamientoClass;

    public function __construct(AlojamientoClass $alojamientoClass)
    {
        $this->alojamientoClass = $alojamientoClass;
    }

    public function index(): View
    {
        return view('software.pages.Alojamientos');
    }

    public function Lista()
    {
        $datos = $this->alojamientoClass->AlojamientoLista();
        return datatables()->of($datos)->toJson();
    }

    public function ver($id): JsonResponse
    {
        $datos = $this->alojamientoClass->AlojamientoListaById($id);
        return response()->json($datos);
    }

    public function Crear(AlojamientoRequest $request): JsonResponse
    {
        try {
            $data = $request->validate([
                'nombre' => 'required|string|max:255|min:3',
                'descripcion' => 'required|string|max:255|min:3',
            ]);
            $this->alojamientoClass->AlojamientoCrear($data);
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }

    public function Actualizar(AlojamientoRequest $request, Alojamiento $id): JsonResponse
    {
        try {
            $data = $request->validate([
                'nombre' => 'required|string|max:255|min:3',
                'descripcion' => 'required|string|max:255|min:3',
            ]);
            $this->alojamientoClass->AlojamientoActualizar($id, $data);
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }

    public function Eliminar(Alojamiento $id): JsonResponse
    {
        try {
            $id->delete();
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }
}
