<?php

namespace App\Service\Admin;

use App\Service\DB\ConsultasDBClass;

class CategoriaClass
{

    private $DBClass;

    public function __construct(ConsultasDBClass $DBClass)
    {
        $this->DBClass = $DBClass;
    }

    public function CategoriaLista()
    {
        return $this->DBClass->CategoriaLista();
    }

    public function CategoriaListaById($id)
    {
        return $this->DBClass->CategoriaListaID($id);
    }

    public function CategoriaCrear($data)
    {
        $this->DBClass->CategoriaCrear($data);
    }
    
    public function CategoriaActualizar($id, $data)
    {
        $this->DBClass->CategoriaActualizar($id, $data);
    }
}
