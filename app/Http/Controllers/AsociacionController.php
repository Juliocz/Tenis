<?php

namespace App\Http\Controllers;

use App\Models\cat_asociacion;
use App\Models\cat_torneo;
use App\Models\adm_usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class AsociacionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function asociacion_user(){


        $asociacion=cat_asociacion::getAsociacion(Auth::user()->id_asociacion);
        //return cat_torneo::getTorneosFromId_asoc(Auth::user()->id_asociacion)->count();
      //  return cat_asociacion::getCountTorneos(Auth::user()->id_asociacion);
        //Si no pertenece a ninguna asociacion, asociacion null
        if(!$asociacion){return view('msg')->with('title',"Ninguna asociacion")->with('msg',"No pertenece a ninguna asociacion");}


        $asociacion->torneos=cat_torneo::getTorneosFromId_asoc($asociacion->id_asociacion);
        $asociacion->miembros=adm_usuario::getUsersFromIdAsociacion($asociacion->id_asociacion);
        $asociacion->torneos_number=$asociacion->torneos->count();
        $asociacion->miembros_number=$asociacion->miembros->count();
        //$asociacion->torneos_number=cat_asociacion::getCountTorneos($asociacion->id_asociacion);
        //$asociacion->miembros_number=cat_asociacion::getCountMembers($asociacion->id_asociacion);
        $asociacion->torneos=$asociacion->torneos->take(10);

        /*$asociacion->torneos=cat_torneo::getTorneosFromId_asoc($asociacion->id_asociacion);*/

      /*  return $asociacion;*/
        return view('asociaciontorneos_crud')
        ->with('asociacion',$asociacion);

    }
}
