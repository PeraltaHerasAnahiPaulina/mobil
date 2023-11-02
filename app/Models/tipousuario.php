<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipousuario extends Model
{
    use HasFactory;
    protected $table = 'tipousers';
    protected $primaryKey ='idtipou';
    protected $fillable = ['nombre'];
    public $timestamps = false;

      public function usuariosadmin()
     {
         return $this->hasMany(usuariosadmin::class);
     }
}
