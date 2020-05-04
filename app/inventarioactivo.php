<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventarioactivo extends Model
{
    //
    protected $fillable = ['numInventario', 'tipo', 'descripcion','numSerie','resguardo','valorAdqui','verificado','numTrabajador'];
}
