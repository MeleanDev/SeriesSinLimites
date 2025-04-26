<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use App\Service\Admin\CategoriaClass;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\View\View;

class CategoriaController extends Controller
{
    private $categoriaClass;

    public function __construct(CategoriaClass $categoriaClass)
    {
        $this->categoriaClass = $categoriaClass;
    }

    public function index(): View
    {
        return view('software.pages.Categorias');
    }

    public function Lista()
    {
        $datos = $this->categoriaClass->CategoriaLista();
        return datatables()->of($datos)->toJson();
    }

    public function ver($id): JsonResponse
    {
        $datos = $this->categoriaClass->CategoriaListaById($id);
        return response()->json($datos);
    }

    public function Crear(CategoriaRequest $request): JsonResponse
    {
        try {
            $data = $request->validate([
                'nombre' => 'required|string|max:255|min:3',
                'descripcion' => 'required|string|max:255|min:3',
            ]);
            $this->categoriaClass->CategoriaCrear($data);
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }

    public function Actualizar(CategoriaRequest $request, Categoria $id): JsonResponse
    {
        try {
            $data = $request->validate([
                'nombre' => 'required|string|max:255|min:3',
                'descripcion' => 'required|string|max:255|min:3',
            ]);
            $this->categoriaClass->CategoriaActualizar($id, $data);
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }

    public function Eliminar(Categoria $id): JsonResponse
    {
        try {
            $id->delete();
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }
}
