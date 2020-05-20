<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/random' , function(){

    // $carton=array();

    // for ($i=0; $i <9; $i++) {
    //     array_push($carton,rand(1,100));
    // }

    // return $carton;

    // $numbers = range(1, 100);
    // shuffle($numbers);
    // return $numbers;


    //Generamos un array de 9 numeros no repetidos del 1 al 100 incluidos. 
    $cont=0;
    $carton=array();
    while ($cont<9) {
        $num_aleatorio = rand(1,100);
        if (!in_array($num_aleatorio,$carton)) {
          array_push($carton,$num_aleatorio);
          $cont++;
        }
      }
      //Convertimos el array en un string separando los valores con un guión '-'
      $carton=implode("-",$carton);
      return view('vistacarton',compact('carton'));
});


Route::post('/compras', 'ProductoController@crearProducto2');
Route::post('/nuevoproducto','ProductoController@crearProducto');
Route::get('/productoscomprados', 'ProductoController@compras');



