<?php
use App\CaoUsuario;
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
	//$caos = App\CaoUsuario::all();
	$caos = DB::table('cao_usuario')
				->join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario')->get();
	
    return view('dashboard', compact('caos'));
});





Route::get('consultores/{co_usuario}', 'TaskController@agence');