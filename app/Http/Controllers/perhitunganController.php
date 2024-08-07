<?php

namespace App\Http\Controllers;

use App\Models\tableahpduas;
use App\Models\tableahpsatus;
use App\Models\tableahptigas;
use App\Models\ValueCriteria;
use App\Models\Data;

use App\Models\tablewaspasalternatifs;
use App\Models\tablewaspasnolaibobots;
use App\Models\tablewaspasnormalisasidanqis;
use Illuminate\View\View;
use Illuminate\Http\Request;


class PerhitunganController extends Controller
{
    public function index()
    {
        $dataBaruTabelTiga = tableahptigas::find(3);
        $cr = $dataBaruTabelTiga->value;

        if ($cr <= 0.1) {
            $konsistensiData = "Konsisten";
        } else {
            $konsistensiData = "Tidak Konsisten";
        }
        return view(
            '/perhitungan',
            [
                'title' => 'Perhitungan Metode AHP',
                'active' => 'perhitunganahp',
                'active' => 'perhitunganahp',
                'konsistensiData' => $konsistensiData,
                'tablesatu' => tableahpsatus::all(),
                'tabledua' => tableahpduas::all(),
                'tabletiga' => tableahptigas::all(),

            ]
        );
    }
    public function hitung()
    {

        $jumlahDesimal = 4;
        $konsistensiData = 'Tidak Konsisten';
        $totalJumlah = 0;
        $totalPrioritas = 0;
        $totalEigenValue = 0;
        $jumlahTotalKriteria1 = 0;
        $jumlahTotalKriteria2 = 0;
        $jumlahTotalKriteria3 = 0;
        $jumlahTotalKriteria4 = 0;

        for ($i = 1; $i < 5; $i++) {
            $data = ValueCriteria::find($i);
            $jumlahTotalKriteria1 += $data->criteria1;
            $dataBaru = tableahpsatus::find($i);
            $dataBaru->criteria1 = round($data->criteria1, $jumlahDesimal);
            $dataBaru->save();
            //  dd($waspasNilaiBobot);
        }
        $dataBaru = tableahpsatus::find(5);
        $dataBaru->criteria1 = round($jumlahTotalKriteria1, $jumlahDesimal);
        $dataBaru->save();
        for ($i = 1; $i < 5; $i++) {
            $data = ValueCriteria::find($i);
            $jumlahTotalKriteria2 += $data->criteria2;
            $dataBaru = tableahpsatus::find($i);
            $dataBaru->criteria2 = round($data->criteria2, $jumlahDesimal);
            $dataBaru->save();
        }
        $dataBaru = tableahpsatus::find(5);
        $dataBaru->criteria2 = round($jumlahTotalKriteria2, $jumlahDesimal);
        $dataBaru->save();
        for ($i = 1; $i < 5; $i++) {
            $data = ValueCriteria::find($i);
            $jumlahTotalKriteria3 += $data->criteria3;
            $dataBaru = tableahpsatus::find($i);
            $dataBaru->criteria3 = round($data->criteria3, $jumlahDesimal);
            $dataBaru->save();
        }
        $dataBaru = tableahpsatus::find(5);
        $dataBaru->criteria3 = round($jumlahTotalKriteria3, $jumlahDesimal);
        $dataBaru->save();
        for ($i = 1; $i < 5; $i++) {
            $data = ValueCriteria::find($i);
            $jumlahTotalKriteria4 += $data->criteria4;
            $dataBaru = tableahpsatus::find($i);
            $dataBaru->criteria4 = round($data->criteria4, $jumlahDesimal);
            $dataBaru->save();
        }
        $dataBaru = tableahpsatus::find(5);
        $dataBaru->criteria4 = round($jumlahTotalKriteria4, $jumlahDesimal);
        $dataBaru->save();

        //    akhir perhitungan satu

        // Perhitungan dua

        $jumlahKriteria1 = 0;
        $jumlahKriteria2 = 0;
        $jumlahKriteria3 = 0;
        $jumlahKriteria4 = 0;

        $Kriteria1tabel1 = tableahpsatus::find(5);
        $jumlahKriteriaTabel1 = $Kriteria1tabel1->criteria1;
        for ($i = 1; $i < 5; $i++) {
            $data = ValueCriteria::find($i);
            $dataBaruTabelDua = tableahpduas::find($i);
            $nialiBaru =  $data->criteria1 / $jumlahKriteriaTabel1;
            $dataBaruTabelDua->criteria1 = round($nialiBaru, $jumlahDesimal);
            $jumlahKriteria1 += $nialiBaru;
            $dataBaruTabelDua->save();
            //  dd($waspasNilaiBobot);
        }




        $Kriteria2tabel1 = tableahpsatus::find(5);
        $jumlahKriteriaTabel1 = $Kriteria2tabel1->criteria2;
        for ($i = 1; $i < 5; $i++) {
            $data = ValueCriteria::find($i);
            $dataBaru = tableahpduas::find($i);
            $nialiBaru =  $data->criteria2 / $jumlahKriteriaTabel1;
            $dataBaru->criteria2 = round($nialiBaru, $jumlahDesimal);
            $jumlahKriteria2 += $nialiBaru;
            $dataBaru->save();
            //  dd($waspasNilaiBobot);
        }



        $Kriteria3tabel1 = tableahpsatus::find(5);
        $jumlahKriteriaTabel1 = $Kriteria3tabel1->criteria3;
        for ($i = 1; $i < 5; $i++) {
            $data = ValueCriteria::find($i);
            $dataBaru = tableahpduas::find($i);
            $nialiBaru =  $data->criteria3 / $jumlahKriteriaTabel1;
            $dataBaru->criteria3 = round($nialiBaru, $jumlahDesimal);
            $jumlahKriteria3 += $nialiBaru;
            $dataBaru->save();
            //  dd($waspasNilaiBobot);
        }



        $Kriteria4tabel1 = tableahpsatus::find(5);
        $jumlahKriteriaTabel1 = $Kriteria4tabel1->criteria4;
        for ($i = 1; $i < 5; $i++) {
            $data = ValueCriteria::find($i);
            $dataBaru = tableahpduas::find($i);
            $nialiBaru =  $data->criteria4 / $jumlahKriteriaTabel1;
            $dataBaru->criteria4 = round($nialiBaru, $jumlahDesimal);
            $jumlahKriteria4 += $nialiBaru;
            $dataBaru->save();

            // hitung jumlah
            $sum = $dataBaru->criteria1 + $dataBaru->criteria2 + $dataBaru->criteria3 + $dataBaru->criteria4;
            $dataBaru->jumlah = round($sum, $jumlahDesimal);
            $dataBaru->save();

            // hitung prioritas
            $dataPrioritas = round($sum / 4, $jumlahDesimal);
            $dataBaru->prioritas =  $dataPrioritas;
            $totalPrioritas += $dataPrioritas;
            $dataBaru->save();

            $dataEigenValue = 0;
            //hitung eigen value (setiap prioritas dikali jumlahTotalKriteria1)
            if ($i == 1) {
                $dataEigenValue = round($dataPrioritas * $jumlahTotalKriteria1, $jumlahDesimal);
            } else if ($i == 2) {
                $dataEigenValue = round($dataPrioritas * $jumlahTotalKriteria2, $jumlahDesimal);
            } else if ($i == 3) {
                $dataEigenValue = round($dataPrioritas * $jumlahTotalKriteria3, $jumlahDesimal);
            } else if ($i == 4) {
                $dataEigenValue = round($dataPrioritas * $jumlahTotalKriteria4, $jumlahDesimal);
            }
            $dataBaru->eigenvalue =  $dataEigenValue;
            $totalEigenValue += $dataEigenValue;
            $dataBaru->save();
        }
        $dataBaruTabelDua = tableahpduas::find(5);
        $dataBaruTabelDua->criteria1 = round($jumlahKriteria1, $jumlahDesimal);
        $dataBaruTabelDua->criteria2 = round($jumlahKriteria2, $jumlahDesimal);
        $dataBaruTabelDua->criteria3 = round($jumlahKriteria3, $jumlahDesimal);
        $dataBaruTabelDua->criteria4 = round($jumlahKriteria4, $jumlahDesimal);
        $totalJumlah = $jumlahKriteria1 + $jumlahKriteria2 + $jumlahKriteria3 + $jumlahKriteria4;
        $dataBaruTabelDua->jumlah = round($totalJumlah, $jumlahDesimal);
        $dataBaruTabelDua->prioritas = round($totalPrioritas, $jumlahDesimal);
        $dataBaruTabelDua->eigenvalue = round($totalEigenValue, $jumlahDesimal);
        $dataBaruTabelDua->save();

        // menghitung Ci
        $ri = 0.90;
        $ci = round(($totalEigenValue - 4) / 4, $jumlahDesimal);
        $cr = round($ci / $ri, $jumlahDesimal);
        // dataBaruTabelTiga
        $dataBaruTabelTiga = tableahptigas::find(1);
        $dataBaruTabelTiga->value = $ci;
        $dataBaruTabelTiga->save();
        $dataBaruTabelTiga = tableahptigas::find(2);
        $dataBaruTabelTiga->value = $ri;
        $dataBaruTabelTiga->save();
        $dataBaruTabelTiga = tableahptigas::find(3);
        $dataBaruTabelTiga->value = $cr;
        $dataBaruTabelTiga->save();

        if ($cr <= 0.1) {
            $konsistensiData = "Konsisten";
        } else {
            $konsistensiData = "Tidak Konsisten";
        }

        return view(
            '/perhitungan',
            [
                'title' => 'Perhitungan Metode AHP',
                'active' => 'perhitunganahp',
                'konsistensiData' => $konsistensiData,
                'tablesatu' => tableahpsatus::all(),
                'tabledua' => tableahpduas::all(),
                'tabletiga' => tableahptigas::all(),

            ]
        );
    }

    public function alternatif()
    {
        $warning = "input data alternatif pada menu alternatif";
        $data = Data::all();
        if ($data == null) {
            $warning = "input data alternatif pada menu alternatif";
        } else {
            $warning = "";
        }


        return view(
            'calcultation.alternatifvalue',
            [
                'warning' => $warning,
                'title' => 'Perhitungan Metode Waspas',
                'active' => 'perhitunganalternatif',
                'waspasAlternatif' => tablewaspasalternatifs::all(),

            ]
        );
    }

    public function normalisasi()
    {

        $title = 'Perhitungan Akhir Metode Waspas ';
        $active = 'perhitunganwaspas';
        $waspasNormalisasi = tablewaspasnormalisasidanqis::all();
        $waspasNilaiBobot = null;
        for ($i = 1; $i < 5; $i++) {
            $data = tablewaspasnolaibobots::find($i);
            $waspasNilaiBobot[$i] = $data->nilai;
            //  dd($waspasNilaiBobot);
        }
        return view(
            'calcultation.waspascalculation',
            compact('waspasNilaiBobot', 'title', 'active', 'waspasNormalisasi')
        );
    }
}
