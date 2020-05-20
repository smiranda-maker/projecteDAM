<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as DataBase;

use Illuminate\Http\Request;
use App\Producto;
use App\compras;
use App\User;
class ProductoController extends Controller
{
    public function todoslosproductos(){
    
        $producto=Producto::all();

        return view('todosproductos',compact('producto'));
        
    }




    public function crearProducto(Request $Request){
       // $user = Auth::user();  
            $fileName = '/upload/'.time().'.'.$Request->file->extension();
            $create = time();
            //mover el fichero a la carpeta destinada
            $Request->file->move(public_path('upload'), $fileName);

            //Crear la practica y guardarla
            $producto = new Producto();
            $producto->nombre = $Request->nombre;
            $producto->descripcion =$Request->descripcion;
            $producto->precio =$Request->precio;
            $producto->url = $fileName;
            $producto->stock = $Request->stock;
            $producto->disposicion = 1;
            $producto->created_at = $create;
            $producto->updated_at = $create;
            $producto->save();

            return redirect('/todosproductos')->with('success','Practica entregada.');
         
    }

    public function compras()
    {
        $productos = DataBase::table('productos')->get();
        //$compras = DataBase::table('compras')->where('user_id', Auth::id())->get(); CUANDO ME FUNCIONE EL LOGIN
        $compras = DataBase::table('compras')->where('user_id', 1)->get();
        $productosarray = array();

        $count = 0;

        foreach ($compras as $compra) {

            foreach ($productos as $producto) {
                if ($producto->id == $compra->producto_id) {
                    $productosarray[$count]['nombre'] = $producto->nombre;
                    $productosarray[$count]['descripcion'] = $producto->descripcion;
                    $productosarray[$count]['url'] = $producto->url;
                    break;
                }
                $count++;
            }
        }



        return view('/productoscomprados', compact('productosarray'));
    }

    public function crearProducto2(Request $Request)
    {
        $usuario = DataBase::table('users')->where('id', 1)->get();
        foreach ($usuario as $user) {
            $monedas = $user->fichas;
        }
        User::where('id', 1)->update(['fichas' => $monedas - $Request->precio]);
        $producto = new compras();
        $producto->producto_id = $Request->producto_id;
        $producto->user_id = $Request->user_id;
        $producto->fecha  = date('Y-m-d H:i:s');
        $producto->created_at  =  time();
        $producto->updated_at  = time();
        $producto->save();



        return redirect('/productoscomprados')->with('success', 'Practica entregada.');
    }



    
}
