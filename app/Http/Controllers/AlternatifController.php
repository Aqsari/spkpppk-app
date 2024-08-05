<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Value;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DatasImport;
use App\Models\Eduction;
use App\Models\Position;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class AlternatifController extends Controller
{
    public function input()
    {

        return view(
            'alternatif.input',
            [
                'title' => 'Alaternatif input',
                'active' => 'alternatifinput',
                'values' => Value::all(),
                'positions' => Position::all(),
                'educations' => Eduction::all()
            ]
        );
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'UMUR' => 'required|max:255',
            'LAMA_HONOR' => 'required|max:255',
            'JABATAN' => 'required|max:255',
            'PENDIDIKAN' => 'required|max:255',
            'JURUSAN' => 'required|max:255',
            'criteria_value' => 'required|max:255',
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

        return view('alternatif.edit', 
        ['data' => $data, 
        'values' => Value::all(),
        'positions' => Position::all(),
        'educations' => Eduction::all()
    ]);
    }

    public function edit($id): View
    {
        $data = Data::findOrFail($id);
        return view('alternatif.edit', compact('data'));
    }

    public function updates(Request $request, $id) //: RedirectResponse
    {

        // dd($request);
        // Find the Data model instance by ID
        $data = Data::findOrFail($id);

        $rules = ([
            'UMUR' => 'required|max:255',
            'LAMA_HONOR' => 'required|max:255',
            'JABATAN' => 'required|max:255',
            'PENDIDIKAN' => 'required|max:255',
            'JURUSAN' => 'required|max:255',
            'criteria_value' => 'required|max:255',
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

    public function import(Request $request)
    {
        // Validate the file input
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Process the file upload
        if ($request->hasFile('file')) {
            // Get the uploaded file
            $file = $request->file('file');

            // Store the file in the 'imports' directory inside Laravel's storage
            $path = $file->store('imports');
            // dd($path);
            // Check if file exists before importing
            try {

                if (file_exists(storage_path('app/' . $path))) {

                    // Import the Excel file using Laravel Excel
                    Excel::import(new DatasImport, storage_path('app/' . $path));
                    // dd('app/' . $path);
                    // Optionally, delete the file after importing
                    Storage::delete($path);

                    // Redirect with success message

                    return redirect()->back()->with('success', 'File imported successfully.');
                } else {
                    dd("error");
                    // File does not exist or cannot be accessed
                    return redirect()->back()->with('error', 'File does not exist or cannot be accessed.');
                }
                dd("disini");
            } catch (\Error $th) {
                dd($th);
            }
        }

        // Handle the case where no file was uploaded
        return redirect('/alternatif')->back()->withErrors('No file was uploaded.');
    }
}
