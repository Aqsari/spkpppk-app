<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        
        $request->session()->forget('Sukses');
        return view('login.index',
        ['title'=>'login',
        'active'=>'login']
    );
    }

    public function check(){
        return view('login.index',
        ['title'=>'login',
        'active'=>'login']
    );
    }
}
