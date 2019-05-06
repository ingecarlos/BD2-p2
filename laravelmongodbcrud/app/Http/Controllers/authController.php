<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class authController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function login(Request $request){
    	
    	if($request->nickname == 'admin'){
    		$admin = usuario::where('nickname',$request->nickname)
    							->orWhere('password',$request->password)
    							->get();
    		if(sizeof($admin)!=0){
    			return redirect("producto");
    		}else{
    			return redirect("/")->with('success','credenciales incorrectas');
    		}
    	}else{
    		return redirect("/")->with('success','funcinalidades solo para el usuario administrador');
    	}
    }
}
