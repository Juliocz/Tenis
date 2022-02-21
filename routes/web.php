<?php

use App\Http\Controllers\AsociacionController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UsuarioController;
use App\Models\cat_torneo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[LandingController::class,'getLanding'])->name("landing");
Route::get('/register',[UsuarioController::class,"registrar"])->name("register");
Route::post('/register',function(Request $request)
{   return $request->all();
    # code...
});
Route::get('/asociacion_user',[AsociacionController::class,"asociacion_user"])->name('asociacion_arbitro')->middleware('auth');



Route::get('/login', function () {
    if(Auth::check()) return redirect()->route('asociacion_arbitro');//si esta logueado redirecciona a asociacion crud
    else return view('login');//sino muestra login comun
})->name("login");
Route::post('/login',[UsuarioController::class,"login"])->name("login");
Route::get('/logout',function(Request $request){
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect()->route('landing');
})->name("logout");





/*Route::get('/torneos', function () {
    return cat_torneo::get()->take(5);
});*/


/*
Route::get('/islogin',function(){
    if (Auth::check()) {
        return "Esta sesion iniciada";
    }else return "sesion no iniciada";
});*/
