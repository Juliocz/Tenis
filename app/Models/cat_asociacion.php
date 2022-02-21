<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cat_torneo;
use App\Models\adm_usuario;

class cat_asociacion extends Model
{
    protected $table="cat_asociacion";//nombre de la tabla
    protected $primaryKey="id_asociacion";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar

    use HasFactory;

    public static function getAsociacions(){
        return self::select('id_asociacion','nombre_asociacion')->get();
    }
    public static function getAsociacion($idAsociacion){
        return self::where('id_asociacion',$idAsociacion)->first();
    }

    public static function getCountMembers($idAsociacion){
        return adm_usuario::where('id_asociacion',$idAsociacion)->get()->count();
    }
    public static function getCountTorneos($idAsociacion){
       /* cat_torneo::getTorneosFromId_asoc($idAsociacion)->count();*/
    return cat_torneo::getTorneosFromId_asoc($idAsociacion)->count();
     /*  return 4;*/
    }

}
