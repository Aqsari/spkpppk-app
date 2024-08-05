<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\ValueCriteria;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    public function index()
    {
        $name_criteria = [
            1 => 'Usia',
            2 => 'Lama Honor',
            3 => 'Pendidikan',
            4 => 'Keseuaian',
        ];
        $title='Bobot input';
        $active='alternatifindex';
        $criterias=ValueCriteria::all();
        return view('bobot.index',compact('name_criteria','title','active','criterias'));
    }
    public function update(Request $request)
    {
        $title='Bobot input';
        $active='alternatifindex';
        $criterias=ValueCriteria::all();
        $newdata = $request->input('costbenefi');
//  dd($request);
        for ($i=1;$i<=4;$i++)
        {
           
            $data = ValueCriteria::findOrFail($i);
            $data->costbenefit = $newdata[$i];
            $data->save();
           
        
     }
        return redirect('/bobot');
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
