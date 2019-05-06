<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\producto;

class productoController extends Controller
{
    public function index()
	{
		$productos = producto::all();
		return view('productoindex',compact('productos'));
	}

	public function buscar(Request $request){
		if($request->buscar!=""){
			$productos = producto::where('nombre','like','%'.$request->buscar.'%')->get();
		}else{
			$productos = producto::all();
		}
		return view('productoindex',compact('productos'));	
	}

    public function create()
    {
    	return view('productocreate');
    }

    public function store(Request $request){
    	$producto = new producto();
    	$producto->nombre = $request->nombre;
    	$producto->precio = $request->precio;
    	$producto->stock = $request->stock;
    	$producto->save();
    	return redirect('producto')->with('success','producto agregado exitosamente!');
    }

    public function edit($id){
    	$producto = producto::find($id);
    	return view ('productoedit',compact('producto','id'));
    }

    public function update(Request $request,$id){
    	$producto = producto::find($id);
    	$producto->nombre = $request->nombre;
    	$producto->precio = $request->precio;
    	$producto->stock = $request->stock;
    	$producto->save();

    	return redirect('producto')->with('success','Producto '.$request->nombre.' actualizado correctamente!');
    }

    public function destroy($id)
    {
        $producto = producto::find($id);
        $producto->delete();
        return redirect('producto')->with('success','producto '.$producto->nombre.' eliminado exitosamente!');
    }
}
