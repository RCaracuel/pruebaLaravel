<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TablaProyectos extends Model
{
    //Toma el nombre de esta clase en singular para acceder a la bd, si no fuese igual se puede definir con TABLE
    protected $table='tabla_proyectos';
    protected $fillable=['titulo','descripcion'];
  
}
