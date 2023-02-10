<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut_funcionario',
        'nombre_funcionario',
        'direccion_funcionario',
        'fecha_nacimiento_funcionario',
        'estado_funcionario'
    ];
}
