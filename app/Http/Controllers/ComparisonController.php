<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function index()
    {
        $criteria = [
            'F01' => 'Shooting',
            'F02' => 'Passing',
            'F03' => 'Rebound',
            'F04' => 'Dribbling',
            'F05' => 'Fisik',
        ];

        $comparisons = [
            '5' => 'Lebih penting dari',
            '4' => 'Mendekati lebih penting dari',
            '3' => 'Sedikit lebih penting dari',
            '2' => 'Mendekati sedikit lebih penting dari',
        ];

        return view('comparisons.index', compact('criteria', 'comparisons'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comparisons' => 'required|array',
            'comparisons.*' => 'required|string',
        ]);

        // Process the comparisons
        // ...

        return redirect('/comparisons')->with('success', 'Comparisons saved successfully.');
    }
}
