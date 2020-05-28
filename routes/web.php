<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Partida;
use App\Carton;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB as DataBase;


//use Pixeloution\Random\Randomizer;

# takes a partial User Agent as an argument; random.org requests you use your
# email address in case of issues
//$generator = new Randomizer( 'yourfarrukito@gmail.com' );

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


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/welcome', function () {
  return view('welcome');
});



/*
Route::get('/productos', function () {
    return view('todosproductos');
});
*/
//Route::get('/productos','ProductoController@productos');

Auth::routes();
/*Prueba ciudades */
Route::get('/ciudades', function () {
    return view('ciudades');
});

/*Prueba preloader */
Route::get('/carga', function () {
    return view('preloader');
});

Route::get('/todosproductos', 'ProductoController@todoslosproductos');


//Esta funcion se tendrá que hacer automaticamente, crea 3 partidas
Route::get('/generarPartidas', 'PartidaController@generarPartidas');

Route::post('/compras', 'ProductoController@crearProducto2');
Route::post('/nuevoproducto','ProductoController@crearProducto');
Route::get('/productoscomprados', 'ProductoController@compras');


Route::get('/numerosAPartida',function(){

          //Miramos en la tabla carton en que partida ha comprado
          //su ultimo cartón

          $partidasdatos=Carton::select('partida_id')
          ->where('user_id','=',Auth::user()->id)
          ->orderby('partida_id','desc')
          ->first();

          return $partidasdatos->partida_id;

});


Route::get('/vistacarton', 'PartidaController@numeros');
Route::post('/crearcartones', 'PartidaController@crearcartones');
Route::get('/numerosquehansalido', 'PartidaController@numerosmostrados');
Route::get('/ultimonumero', 'PartidaController@ultimonumero');
Route::get('/ganador', 'PartidaController@ganador');
Route::get('/ganadorlinea', 'PartidaController@ganadorlinea');
Route::get('/cuentaatras', 'PartidaController@cuentaatras');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/pruebafecha',function(){

    $fecha = Carbon::now();
    $fecha = $fecha->format('Y-m-d:H:i');
    $partida=Partida::where('fechaEmpieza','>',$fecha)->first();

    return $partida->fechaEmpieza;


});
