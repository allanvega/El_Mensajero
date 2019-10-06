<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    
    protected $table='carta';
    protected $fillable =['contenido','imagen'];
    protected $pk='';
}
