<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('values')->insert([
            [
                'value' => 1,
                'value_name' => 'Sangat Sesuai',
            ],
            [
                'value' => 0.75,
                'value_name' => 'Sesuai',
            ],
            [
                'value' => 0.5,
                'value_name' => 'Kurang Sesuai',
            ],
            [
                'value' => 0.25,
                'value_name' => 'Tidak Sesuai',
            ],
        ]);
    }
}
