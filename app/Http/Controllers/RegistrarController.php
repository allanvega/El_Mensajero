<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Registrate;

class RegistrarController extends Controller
{
    public function create()
    {
        return view('layout.registrarse');
        //aumentando profesiones Dick
        
        //fin de profesiones dick
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'ci'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
            'contraseña'=>'required'
        ],[
            'nombre.required'=>'el nombre de usuario es obligatorio',
            'apellido.requerid'=>'es obligatorio',
            'ci.required'=>'ci falta'
        ]);
        
        $nombre=$request['nombre'];
        $apellido=$request['apellido'];
        $ci=$request['ci'];
        $telefono=$request['telefono'];
        $correo=$request['correo'];
        $contraseña=$request['contraseña'];

        $registro= new Registrate();
        $registro->nombre=$nombre;
        $registro->apellido=$apellido;
        $registro->ci=$ci;
        $registro->telefono=$telefono;
        $registro->correo=$correo;
        $registro->contraseña=$contraseña;

         $registro->save();
          return back()->with('mensaje', 'registro exitoso');
 

       
    

      //return $request->input('nombre');
         //return $request->all();
    }
}
