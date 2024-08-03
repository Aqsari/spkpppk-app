<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function input()
    {
       
        return view('alternatif.input',
        ['title'=>'Alaternatif input',
        'active'=>'alternatifinput']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:datas',
            'data1' => 'required|max:255',
            'data2' => 'required|max:255',
            'data3' => 'required|max:255',
            'data4' => 'max:255',
            // add more validation rules for other form fields
        ]);

        Data::create($validatedData);

         return redirect('/alternatif');
    }
}
