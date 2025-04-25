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

    public function getCategorias()
    {
        return $this->DBClass->getCategorias();
    }

}
