<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

class AlternatifController extends Controller
{
    public function input()
    {

        return view(
            'alternatif.input',
            [
                'title' => 'Alaternatif input',
                'active' => 'alternatifinput'
            ]
        );
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

    public function destroy($id)
    {
        // dd($data);
        Data::destroy($id);

        return redirect('/alternatif')->with('Sukses', 'Data telah terhapus.');
    }

    public function show($id)
    {
        $data = Data::findOrFail($id); // Retrieve the data by its ID
        
        return view('alternatif.edit', [ 'data' => $data,'values' => Value::all()]);
    }

    public function edit($id):View
    {
        $data = Data::findOrFail($id);
        return view('alternatif.edit',compact('data'));
    }

    public function updates(Request $request, $id) //: RedirectResponse
    {

        // dd($request);
   // Find the Data model instance by ID
   $data = Data::findOrFail($id);

        $rules = ([
            'data1' => 'required|max:255',
            'data2' => 'required|max:255',
            'data3' => 'required|max:255',
            'data4' => 'max:255',
            // add more validation rules for other form fields
        ]);

        
    // If the name field is changed, add a unique validation rule
    if ($request->has('name') && $request->name !== $data->name) {
        $rules['name'] = 'required|unique:datas,name,' . $data->id;
    }

        $validatedData = $request->validate($rules);

        // Update the model instance with validated data
    $data->update($validatedData);

        return redirect('/alternatif')->with('Sukses', 'Data telah terupdate.');
    }
}
