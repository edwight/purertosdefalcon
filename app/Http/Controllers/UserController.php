<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mostrarUser(){
    	//todos los usuarios
    	$user = User::all();
    	return view('user/mostrar',compact('user'));
    }
    public function mostrarDetail($id){
    	$user = User::find($id);
    	return view('user/detalles',compact('user'));
    }
}
