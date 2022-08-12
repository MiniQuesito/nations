<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //la tabla con la que se relaciona
    protected $table = "languages";
    //la clave primaria de la tabla
    protected $primaryKey = "language_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion de M:M con paises(Country)
    public function paises(){
        //belongsToMany : parametros
        //1.El modelo a relacionar
        //2.Estableces la tabla pivot
        //3.La FK del modelo actual en el pivot
        //4.La FK del modelo a relacionar
        return $this->belongsToMany(Country::class,
                                     'country_languages',
                                     'language_id',
                                     'country_id'
                                    )->withPivot('official');
    }

    
}
