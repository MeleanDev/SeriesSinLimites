<?php

namespace App\Service\DB;

use App\Models\Alojamiento;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function CategoriaActualizar($id, $data)
    {
        $id->nombre = $data['nombre'];
        $id->descripcion = $data['descripcion'];
        $id->save();
    }

    // Alojamiento
    public function AlojamientoLista()
    {
        return Alojamiento::all();
    }
    public function AlojamientoListaID($id)
    {
        return Alojamiento::find($id);
    }

    public function AlojamientoCrear($data)
    {
        $alojamiento = new Alojamiento();
        $alojamiento->nombre = $data['nombre'];
        $alojamiento->descripcion = $data['descripcion'];
        $alojamiento->save();
    }

    public function AlojamientoActualizar($id, $data)
    {
        $id->nombre = $data['nombre'];
        $id->descripcion = $data['descripcion'];
        $id->save();
    }

    // Adminitrador
    public function AdministradorLista()
    {
        return User::all();
    }
    public function AdministradorListaID($id)
    {
        return User::find($id);
    }

    public function AdministradorCrear($data)
    {
        $categoria = new User();
        $categoria->name = $data['nombre'];
        $categoria->apellido = $data['apellido'];
        $categoria->email = $data['email'];
        $categoria->password = Hash::make($data['password']);
        $categoria->rol = $data['rol'];
        $categoria->save();
    }

    public function AdministradorActualizar($id, $data)
    {
        $id->name = $data['nombre'];
        $id->apellido = $data['apellido'];
        $id->email = $data['email'];
        $id->password = Hash::make($data['password']);
        $id->rol = $data['rol'];
        $id->save();
    }
}
