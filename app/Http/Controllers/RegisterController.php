<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
        'title'=>'Register',
        'active'=>'register',
    ]);
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:4|unique:users,username',
            'password' => 'required|string|min:4',
            // add more validation rules for other form fields
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
      User::create($validatedData);

      return redirect('/login');
    }
}
