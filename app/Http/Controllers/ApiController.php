<?php

namespace App\Http\Controllers;

use App\Models\cat_asociacion;
use App\Models\cat_club;
use App\Models\cat_torneo;
use Illuminate\Http\Request;

class ApiController extends Controller
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

    public function obtenerTorneo(Request $request){
        return cat_torneo::getTorneoFromState($request->state,$request->count);
    }
    public function obtenerClubs(Request $request){
        return cat_club::getClubsFromIdAsociacion($request->id_asociacion);
    }
    public function obtenerAsociaciones(Request $request){
        return cat_asociacion::getAsociacions();
    }
}
