<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarioadmin extends Model
{
    use HasFactory;
    protected $table = 'usuariosadmin';
    protected $primaryKey ='idu';
    protected $fillable = [
        'nombre',
        'apellido',
        'apellidomat',
        'correo',
        'password',
        'activo',
        'idtipou',
        'telefonocelular',
        'turno',
    ];
}
