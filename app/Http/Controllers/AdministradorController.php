<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdministradorController extends Controller
{
    public function adm(Request $request) {
       //  dd($request);
       $res =  Validator::make($request->all(), [
        'username' => 'required|max:255',
        'password' => 'required|min:6',
        ]);
        if(!$res) {
            return redirect()->intended('/');
        }
        $whitEamil = ['email'=>$request->get('username'), 'password'=>$request->get('password')];
        $whitName = ['name'=>$request->get('username'), 'password'=>$request->get('password')];

        if (Auth::attempt($whitEamil)||Auth::attempt($whitName)) {
            //return Auth::user();
             
             return redirect('/admin2');

        } else {
        
            return redirect()->intended('/');
        }
    }
}
