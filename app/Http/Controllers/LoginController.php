<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(Request $request){
        
        $request->session()->forget('Sukses');
        return view('login.index',
        ['title'=>'login',
        'active'=>'login']
    );
    }

    public function autenticate(Request $request): RedirectResponse
    {

       $credential= $request->validate(
          [
             'username' => 'required',
            'password' => 'required'
          ]
        );

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('home');          
        }
        $request->session()->put('loginfailed', 'Maaf, username dan password anda kurang sesuai.');


        return redirect('login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
