<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
