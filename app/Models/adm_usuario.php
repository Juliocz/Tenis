<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adm_usuario extends Model
{
    protected $table="adm_usuario";//nombre de la tabla
    protected $primaryKey="id_usuario";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar

    use HasFactory;

    public static function isExist($user,$password){
        return self::where('login',$user)
        ->where('clave',$password)->first();
    }

    public static function getUsersFromIdAsociacion($id_asociacion){
        return self::where('id_asociacion',$id_asociacion)->get();
    }
}
