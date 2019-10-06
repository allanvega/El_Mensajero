<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Controllers\RegistrarController;
use App\Http\Requests\Carta;
use App\Http\Requests\Registrate;

Route::post('adm','AdministradorController@adm');
Route::post('login', 'LoginController@login');


Route::get('/','FrontEndController@index'  );
route::get('admin',function() {
  return view('layout.admin');
});
route::get('registrarse','RegistrarController@create');
route::post('registro','RegistrarController@store'); 
Route::get('carta','CartaController@create');
Route::post('store','CartaController@store');   

  route::get('iniciar_sesion',function() {
    return view('layout.iniciar_sesion');
  }); 
  route::get('admin2','Admin2Controller@index');
