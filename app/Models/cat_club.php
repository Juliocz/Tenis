<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat_club extends Model
{
    protected $table="cat_club";//nombre de la tabla
    protected $primaryKey="id_club";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar

    use HasFactory;

    public static function getClubsFromIdAsociacion($idAsociacion){
        return self::where('id_asociacion',$idAsociacion)->get();
    }
}
