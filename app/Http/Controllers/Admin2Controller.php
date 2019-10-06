<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class Admin2Controller extends Controller
{
    //
    public function index()
    {
        $userAuth = Auth::user();
        return view('layout.admin2')->with(['user'=>$userAuth]);
    }
}
