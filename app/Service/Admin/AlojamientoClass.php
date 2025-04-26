<?php

namespace App\Service\Admin;

use App\Service\DB\ConsultasDBClass;

class AlojamientoClass
{
    private $DBClass;

    public function __construct(ConsultasDBClass $DBClass)
    {
        $this->DBClass = $DBClass;
    }

    public function AlojamientoLista()
    {
        return $this->DBClass->AlojamientoLista();
    }

    public function AlojamientoListaById($id)
    {
        return $this->DBClass->AlojamientoListaID($id);
    }

    public function AlojamientoCrear($data)
    {
        $this->DBClass->AlojamientoCrear($data);
    }
    
    public function AlojamientoActualizar($id, $data)
    {
        $this->DBClass->AlojamientoActualizar($id, $data);
    }
}
