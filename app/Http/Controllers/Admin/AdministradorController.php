<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdministradorRequest;
use App\Models\User;
use App\Service\Admin\AdministradorClass;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rules;

class AdministradorController extends Controller
{
    private $administradorClass;

    public function __construct(AdministradorClass $administradorClass)
    {
        $this->administradorClass = $administradorClass;
    }

    public function index(): View
    {
        return view('software.pages.Administradores');
    }

    public function Lista()
    {
        $datos = $this->administradorClass->administradorLista();
        return datatables()->of($datos)->toJson();
    }

    public function ver($id): JsonResponse
    {
        $datos = $this->administradorClass->administradorListaById($id);
        return response()->json($datos);
    }

    public function Crear(AdministradorRequest $request): JsonResponse
    {
        try {
            $data = $request->validate([
                'nombre' => ['required', 'string', 'max:255', 'min:3'],
                'apellido' => ['required', 'string', 'max:255', 'min:3'],
                'rol' => ['required', 'string', 'max:1', 'min:1'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', Rules\Password::defaults()],
            ]);
            $this->administradorClass->administradorCrear($data);
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }

    public function Actualizar(Request $request, User $id): JsonResponse
    {
        try {
            $data = $request->validate([
                'nombre' => ['required', 'string', 'max:255', 'min:3'],
                'apellido' => ['required', 'string', 'max:255', 'min:3'],
                'rol' => ['required', 'string', 'max:1', 'min:1'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
                'password' => ['required', Rules\Password::defaults()],
            ]);
            $this->administradorClass->administradorActualizar($id, $data);
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }

    public function Eliminar(User $id): JsonResponse
    {
        try {
            $id->delete();
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json(['error' => true]);
        }
    }
}
