<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Suport\Facades\Input;

use App\Carta;
use DB;
use Illuminate\Validation\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class CartaController extends Controller
{
    public function store(Request $request){
      
        $this->validate($request, [
            'contenido' => 'required|min:255',
            'imagen' => 'required'
        ],[
            'contenido.required'=>'el contenido es obligatorio',
            'contenido.min'=>'el contenido debe superar las tres lineas',
            'imagen.required'=>'la imagen es requerida'
        ]);
        
        $contenido=$request['contenido'];
        $imagen=$request['imagen'];
        $carta= new Carta();
        $carta->contenido=$contenido;
        $carta->imagen=$imagen;
         $carta->save();
          return back()->with('mensaje', 'cartita enviada');
 
       
    }
    public function create(){
        return view('layout.carta');
    }
}
