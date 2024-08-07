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

class PerhitunganController extends Controller
{
    public function alternatif()
    {

        return view(
            'calcultation.alternatifvalue',
            [
                'title' => 'Perhitungan Metode Waspas',
                'active' => 'alternatifinput',
                'values' => Value::all(),
              
            ]
        );
    }

    public function normalisasi()
    {

        return view(
            'calcultation.waspascalculation',
            [
                'title' => 'Perhitungan Akhir Metode Waspas ',
                'active' => 'alternatifinput',
                'values' => Value::all(),
              
            ]
        );
    }
  
}
