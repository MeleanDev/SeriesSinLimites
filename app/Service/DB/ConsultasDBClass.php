<?php

namespace App\Service\DB;

use App\Models\Categoria;

class ConsultasDBClass
{
    public function getCategorias()
    {
        return Categoria::all();
    }
}
