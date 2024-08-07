<?php

namespace App\Http\Controllers;

use App\Models\tableahpduas;
use App\Models\tableahpsatus;
use App\Models\tableahptigas;
use App\Models\Value;
use App\Models\tablewaspasalternatifs;
use App\Models\tablewaspasnolaibobots;
use App\Models\tablewaspasnormalisasidanqis;
use Illuminate\View\View;
use Illuminate\Http\Request;


class PerhitunganController extends Controller
{
    public function index()
    {

        return view(
            '/perhitungan',
            [
                'title' => 'Perhitungan Metode AHP',
                'active' => 'perhitunganahp',
                'tablesatu' => tableahpsatus::all(),
                'tabledua' => tableahpduas::all(),
                'tabletiga' => tableahptigas::all(),
              
            ]
        );
    }
    public function hitung()
    {

        return view(
            '/perhitungan',
            [
                'title' => 'Perhitungan Metode AHP',
                'active' => 'perhitunganahp',
                'tablesatu' => tableahpsatus::all(),
                'tabledua' => tableahpduas::all(),
                'tabletiga' => tableahptigas::all(),
              
            ]
        );
    }

    public function alternatif()
    {

        return view(
            'calcultation.alternatifvalue',
            [
                'title' => 'Perhitungan Metode Waspas',
                'active' => 'perhitunganalternatif',
                'waspasAlternatif' => tablewaspasalternatifs::all(),
              
            ]
        );
    }

    public function normalisasi()
    {

        
        return view(
            'calcultation.waspascalculation',
            [
                'title' => 'Perhitungan Akhir Metode Waspas ',
                'active' => 'perhitunganwaspas',
                'waspasNilaiBobot' => tablewaspasnolaibobots::all(),
                'waspasNormalisasi' => tablewaspasnormalisasidanqis::all(),
              
            ]
        );
    }
  
}
