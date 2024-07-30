<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function import_excel()
    {
        return view('import_excel');
    }
}