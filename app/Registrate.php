<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrate extends Model
{
    protected $table = "Registrate";
    
    protected $fillable =['nombre','apellido','ci','telefono','correo','contraseña'];
    protected $pk='';
    
}

