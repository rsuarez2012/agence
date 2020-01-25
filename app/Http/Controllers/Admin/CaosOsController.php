<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CaoOs;
use App\CaoUsuario;

class CaosOsController extends Controller
{
    public function profits(Request $request){
    	
    	$usuarios = CaoUsuario::whereIn('co_usuario', $request['consultores'])->get();

    	$profits = CaoOs::whereIn('co_usuario', $request['consultores'])->get();
    	dd($profits);
    }
}
