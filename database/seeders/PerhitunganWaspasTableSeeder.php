<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerhitunganWaspasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tablewaspasnolaibobots')->insert([
            [
                'name' => "Bobot 1",
                'nilai' => 0,
            ],
            [
                'name' => "Bobot 2",
                'nilai' => 0,
            ],
            [
                'name' => "Bobot 3",
                'nilai' => 0,
            ],
            [
                'name' => "Bobot 4",
                'nilai' => 0,
            ],
        ]);
    }
}
