<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la talba con la cual el modelo se relaciona 
    protected $table = "countries";
    //La clave primaria de la tabla 
    protected $primaryKey = "country_id";
    //anula campos de auditoria 
    public $timestamp = false;
    //crea datos falsos 
    use HasFactory;
}
