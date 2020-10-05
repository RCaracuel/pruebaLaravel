<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colectivo extends Model
{
    protected $table='colectivo';
    protected $fillable=['tipo'];
}
