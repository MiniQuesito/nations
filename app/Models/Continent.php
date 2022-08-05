<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla con la cual el modelo se relaciona 
    protected $table = "continents";
    //la clave4 primaria de dicha tabla
    protected $primariKey = "continent_id";
    //anular campos de auditoria 
    public $timestamps = false;
    use HasFactory;

    //relacion entre contiennte y region 
    public function regiones(){
        return $this->hasMany(Region::class , 'continent_id');
   }
}
