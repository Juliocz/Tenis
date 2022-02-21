<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat_torneo extends Model
{
    protected $table="cat_torneo";//nombre de la tabla
    protected $primaryKey="id_torneo";//ponemos el nombre de la llave primaria esto servira para ejcutar otros metodos despues o consultas
    public $timestamps = false;//para que no se cree columnas tiempo al insertar

    use HasFactory;

    //obtiene torneos segun estado, ordenados de la fecha mas actual al mas antiguo y solo trae 10
    public static function getTorneoFromState($state,$count){
       /* return cat_torneo::select('id_asociacion','nombre_torneo','fecha_inicio','fecha_fin','estado','nombre_director')
        ->where('estado',$state)
        ->join('cat_asociacion','cat_torneo.id_asociacion','=','cat_asociacion.id_asociacion')
         ->orderBy('fecha_inicio','DESC')
        ->take($count)->get();*/

        /*return cat_torneo::leftJoin('cat_asociacion','cat_torneo.id_asociacion','=','cat_asociacion.id_asociacion')//uno ambas tablas con una condicion
        ->select('nombre_asociacion','nombre_torneo','fecha_inicio','fecha_fin','estado','nombre_director')
        ->where('estado',$state)
        ->orderBy('fecha_inicio','DESC')
        ->take($count)->get();*/
        return self::getTorneos($state,$count)
        ->orderBy('fecha_inicio','DESC')
        ->take($count)->get();
    }

    public static function getFuturesTorneos($state,$count){
        return  self::getTorneos($state,$count)
        ->whereBetween('fecha_inicio',[Carbon::now()->toDateString(),Carbon::now()->addYears(1)->toDateString()])//entre hoy y futuro 1 año
        ->orderBy('fecha_inicio','ASC')//ordena de la fecha actual a la mas futura
        ->take($count)->get();//cuantos futuros torneos tomar
    }
    public static function getPasadosTorneos($state,$count){
        return self::getTorneos($state,$count)
        ->whereBetween('fecha_inicio',[Carbon::now()->subYears(1)->toDateString(),Carbon::now()->toDateString()])//entre hoy y futuro 1 año
        ->orderBy('fecha_inicio','DESC')//ordena de la fecha actual a la mas pasada
        ->take($count)->get();//cuantos pasados torneos tomar
    }

    //Retorna todos los torneos por su id asociacion
    public static function getTorneosFromId_asoc($id_asociacion){
        return cat_torneo::where('id_asociacion',$id_asociacion)->orderBy('fecha_inicio','DESC')->get();
    }



    //Metodos privados
    //obtiene torneos por estado y numero,obtiene tambien el nombre de la asociacion
    private static function getTorneos($state,$count){
        return cat_torneo::leftJoin('cat_asociacion','cat_torneo.id_asociacion','=','cat_asociacion.id_asociacion')//uno ambas tablas con una condicion
        ->select('nombre_asociacion','nombre_torneo','fecha_inicio','fecha_fin','estado','nombre_director')
        ->where('estado',$state)
        ->take($count);
    }
}




//->sortBy("name");Project::all()->sortByDesc("name"); $entry = Entry::orderBy('created_at', 'ASC')->get();
