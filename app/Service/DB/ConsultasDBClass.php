<?php

namespace App\Service\DB;

use App\Models\Categoria;

class ConsultasDBClass
{
    // Categoria
    public function CategoriaLista()
    {
        return Categoria::all();
    }
    public function CategoriaListaID($id)
    {
        return Categoria::find($id);
    }

    public function CategoriaCrear($data)
    {
        $categoria = new Categoria();
        $categoria->nombre = $data['nombre'];
        $categoria->descripcion = $data['descripcion'];
        $categoria->save();
    }

    public function CategoriaActualizar(Categoria $id, $data)
    {
        $id->nombre = $data['nombre'];
        $id->descripcion = $data['descripcion'];
        $id->save();
    }
}
