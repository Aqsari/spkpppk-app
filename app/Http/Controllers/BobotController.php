<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    public function input()
    {
       
        return view('bobot.input',
        ['title'=>'Bobot input',
        'active'=>'alternatifinput']);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'criteria_name' => 'required|max:255|unique:criterias',
            'criteria_type' => 'required|max:255',
            // add more validation rules for other form fields
        ]);

        Criteria::create($validatedData);

         return redirect('/bobot');
    }
}
