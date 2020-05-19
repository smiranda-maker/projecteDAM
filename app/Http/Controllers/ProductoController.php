<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

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

    
}
