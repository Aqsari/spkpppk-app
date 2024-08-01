<?php

namespace App\Http\Controllers;

use App\Models\Value;
use Illuminate\Http\Request;

class ValueControler extends Controller
{
    public function index()
    {
        return view('hasil', [
            'katergori'=> Value::all()
        ]);
    }
}
