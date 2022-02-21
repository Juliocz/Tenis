<?php

namespace App\Http\Controllers;

use App\Models\cat_torneo;
use Illuminate\Http\Request;

class LandingController extends Controller
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

    public function getLanding(Request $request){
            //obtengo array torneos
            return view("landinghome")
            ->with('torneos_pasados',cat_torneo::getPasadosTorneos('CONCLUIDO',10))
            ->with('torneos_futuros',cat_torneo::getTorneoFromState('EDICION',10))//aqui hay que poner torneos futuros, por que no hay ninguno puse este temporal
            ;
    }
}
