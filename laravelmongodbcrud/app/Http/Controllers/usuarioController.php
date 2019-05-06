<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class usuarioController extends Controller
{
	public function index()
	{
		$usuarios = usuario::all();
		return view('usuarioindex',compact('usuarios'));
	}


    public function buscar(Request $request){
        if($request->buscar!=""){
            $usuarios = usuario::where('nombres','like','%'.$request->buscar.'%')
                                ->orWhere('apellidos','like','%'.$request->buscar.'%')
                                ->get();
        }else{
            $usuarios = usuario::all();
        }
        return view('usuarioindex',compact('usuarios'));  
    }
    
    public function create()
    {
    	return view('usuariocreate');
    }

    public function store(Request $request){
    	$usuario = new usuario();
    	$usuario->nombres = $request->nombres;
    	$usuario->apellidos = $request->apellidos;
    	$usuario->edad = $request->edad;
    	$usuario->nickname = $request->nickname;
    	$usuario->password = $request->password;
    	$usuario->save();
    	return redirect('usuario')->with('success','usuario agregado exitosamente!');
    }

    public function edit($id){
    	$usuario = usuario::find($id);
    	return view ('usuarioedit',compact('usuario','id'));
    }

    public function update(Request $request,$id){
    	$usuario = usuario::find($id);
    	$usuario->nombres = $request->nombres;
    	$usuario->apellidos = $request->apellidos;
    	$usuario->edad = $request->edad;
    	$usuario->nickname = $request->nickname;
    	$usuario->password = $request->password;
    	$usuario->save();

    	return redirect('usuario')->with('success','Usuario '.$request->nickname.' actualizado correctamente!');
    }

    public function destroy($id)
    {
        $usuario = usuario::find($id);
        $usuario->delete();
        return redirect('usuario')->with('success','usuario '.$usuario->nickname.' eliminado exitosamente!');
    }
}
