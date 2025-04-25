<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\CategoriaClass;
use Illuminate\Http\Request;
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

    public function lista()
    {
        $datos = $this->categoriaClass->getCategorias();
        return datatables()->of($datos)->toJson();
    }

    // public function ver($id)
    // {
    //     $datos = $this->categoriaClass->getCategorias()->find($id);
    //     return response()->json($datos);
    // }

}