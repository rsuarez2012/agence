<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CaoOs;
use App\CaoUsuario;
use App\CaoFatura;

class CaosOsController extends Controller
{
    public function profits(Request $request){
    	
    	$consultores = CaoUsuario::whereIn('co_usuario', $request['consultores'])->get();

    	$co_sistemas = CaoOs::whereIn('co_usuario', $request['consultores'])->get(['co_sistema']);

    	$facturas = CaoFatura::whereIn('co_sistema', $co_sistemas)->whereBetween('data_emissao', [$request['desde'], $request['hasta']])->select(['data_emissao', 'total'])->get();

    	return response()->json(['consultores' => $consultores, 'co_sistemas' => $co_sistemas, 'facturas' => $facturas]);
    }
}
