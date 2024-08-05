<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_education')->insert([
            [
                'name' => "S3",
                'value' => 9,
            ],
            [
                'name' => "S2",
                'value' => 8,
            ],
            [
                'name' => "S1",
                'value' => 7,
            ],
            [
                'name' => "D3",
                'value' => 6,
            ],
            [
                'name' => "D2",
                'value' => 5,
            ],
            [
                'name' => "D1",
                'value' => 4,
            ],
            [
                'name' => "SMA",
                'value' => 3,
            ],
            [
                'name' => "SMP",
                'value' => 2,
            ],
            [
                'name' => "SD",
                'value' => 1,
            ],
            [
                'name' => "Ponpes",
                'value' => 4,
            ],
            [
                'name' => "Lain-Lain",
                'value' => 3,
            ],
        ]);
    }
}
