<?php

namespace App\Http\Controllers;

use App\Models\adm_usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
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

    public function login(Request $request){
        /*return $request->email;*/
        $user=User::isExist($request->email,$request->password);//compruebo credencial
        if(!$user){return view('msg')//si no existe usuario
            ->with("title","Algo no va bien")
            ->with("msg","No se pudo iniciar sesion, verifique su usuario y contraseña");}
        else {  //si existe , devuelvo una sesion
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->route('asociacion_arbitro');
            /*return view('msg')
            ->with("title","Bien.")
            ->with("msg","Sesion iniciada correctamente.");*/
        }
    }

    public function registrar(Request $request){
        return view('registrar');
    }


}
