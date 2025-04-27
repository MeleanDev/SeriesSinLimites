<?php

namespace App\Service\Admin;

use App\Service\DB\ConsultasDBClass;

class AdministradorClass
{
    private $DBClass;

    public function __construct(ConsultasDBClass $DBClass)
    {
        $this->DBClass = $DBClass;
    }

    public function AdministradorLista()
    {
        return $this->DBClass->AdministradorLista();
    }

    public function AdministradorListaById($id)
    {
        return $this->DBClass->AdministradorListaID($id);
    }

    public function AdministradorCrear($data)
    {
        $this->DBClass->AdministradorCrear($data);
    }
    
    public function AdministradorActualizar($id, $data)
    {
        $this->DBClass->AdministradorActualizar($id, $data);
    }
    
}
