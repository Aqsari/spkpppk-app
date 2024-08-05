<?php

namespace App\Http\Controllers;

use App\Models\ValueCriteria;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function index()
    {
        $criteria = [
            1 => 'Usia',
            2 => 'Lama Honor',
            3 => 'Pendidikan',
            4 => 'Keseuaian',
        ];

        $compair = [
            '1' => 'Sama penting dengan',
            '2' => 'Mendekati sedikit lebih penting dari',
            '3' => 'Sedikit lebih penting dari',
            '4' => 'Mendekati lebih penting dari',
            '5' => 'Lebih penting dari',
            '6' => 'Mendekati sangat penting dari',
            '7' => 'Sangat penting dari',
            '8' => 'Mendekati mutlak dari',
            '9' => 'Mutlak sangat penting dari',
        ];
        $title = 'Input Nilai Bobot';
        // $dataMap = [
        //     1=>[2,3,4],
        //     2=>[3,4],
        //     3=>[4],
        // ];
        $dataMap = [
            [2,1],
            [3,1],
            [4,1],
            [3,2],
            [4,2],
            [4,3],
        ];
        $DBMap = [
            1 => [
                2 => 'criteria1',
                3 => 'criteria1',
                4 => 'criteria1',
            ],
            2 => [
                3 => 'criteria2',
                4 => 'criteria2',
            ],
            3 => [
                4 => 'criteria3',
            ],
        ];

        $dataDB = ValueCriteria::all();
        $showData =[];
       // Process the comparisons
       $a=0;
        foreach ($DBMap as $key1 => $values) {
            foreach ($values as $key2 => $criteriaField) {
                if (isset($DBMap[$key1][$key2])) {
                    $data = ValueCriteria::find($key2);
                    $showData[$a] = $data->$criteriaField;
                    $a++;
                }
            }
       
}
        // dd($showData);
        return view('bobot.input', compact('criteria', 'dataMap','compair', 'showData','DBMap','title'));
    }

    public function store(Request $request)
    {

        // Retrieve the comparisons array from the request
        $comparisons = $request->input('dataStore');

        // dd($comparisons);
        // Define a mapping array for criteria fields based on key1 and key2
        $criteriaMap = [
            1 => [
                2 => 'criteria1',
                3 => 'criteria1',
                4 => 'criteria1',
            ],
            2 => [
                3 => 'criteria2',
                4 => 'criteria2',
            ],
            3 => [
                4 => 'criteria3',
            ],
        ];
        $criteriaNegasiMap = [
            1 => [
                2 => 'criteria2',
                3 => 'criteria3',
                4 => 'criteria4',
            ],
            2 => [
                3 => 'criteria3',
                4 => 'criteria4',
            ],
            3 => [
                4 => 'criteria4',
            ],
        ];

        $dataMap = [
            [2,1],
            [3,1],
            [4,1],
            [3,2],
            [4,2],
            [4,3],
        ];
        // Process the comparisons
        for ($i=0;$i<6;$i++)
           {
            $key1= $dataMap[$i][0];
            $key2= $dataMap[$i][1];
                if (isset($criteriaMap[$key2][$key1])) {
                    $criteriaField = $criteriaMap[$key2][$key1];
                    $data = ValueCriteria::findOrFail($key1);
                    $data->$criteriaField = $comparisons[$i];
                    $data->save();
                    // dd($request);
                }
                if (isset($criteriaNegasiMap[$key2][$key1])) {
                    $criteriNegasiaField = $criteriaNegasiMap[$key2][$key1];
                    $dataNegasi = ValueCriteria::findOrFail($key2);
                    $dataNegasi->$criteriNegasiaField = round(1/$comparisons[$i], 3);
                    $dataNegasi->save();
                    // dd($request);
                }
           
        }

        return redirect('/bobot')->with('success', 'Comparisons saved successfully.');
    }
}
