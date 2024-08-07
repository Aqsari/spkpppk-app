<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerhitunganAHPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tableahpsatuses')->insert([
            [
                'name' => "Kriteria 1",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
            ],
            [
                'name' => "Kriteria 2",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
            ],
            [
                'name' => "Kriteria 3",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
            ],
            [
                'name' => "Kriteria 4",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
            ],
            [
                'name' => "Total",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
            ],
        ]);

        DB::table('tableahpduas')->insert([
            [
                'name' => "Kriteria 1",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
                'eigenvalue' => 0,
            ],
            [
                'name' => "Kriteria 2",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
                'eigenvalue' => 0,
            ],
            [
                'name' => "Kriteria 3",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
                'eigenvalue' => 0,
            ],
            [
                'name' => "Kriteria 4",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
                'eigenvalue' => 0,
            ],
            [
                'name' => "Total",
                'criteria1' => 0,
                'criteria2' => 0,
                'criteria3' => 0,
                'criteria4' => 0,
                'jumlah' => 0,
                'prioritas' => 0,
                'eigenvalue' => 0,
            ],
        ]);

        DB::table('tableahptigas')->insert([
            [
                'name' => "Consistency Index",
                'value' => 0,
            ],
            [
                'name' => "Random Consistency Index ",
                'value' => 0,
            ],
            [
                'name' => "Consistency Ratio",
                'value' => 0,
            ],
        ]);
    }
}
