<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class valueCriteriaTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('value_criterias')->insert([
            [
                'criteria_name' => 'Kriteria 1',
                'criteria1' => 1,
                'criteria2' => 1,
                'criteria3' => 1,
                'criteria4' => 1,
                'costbenefit' => 'benefit'
            ],
            [
                'criteria_name' => 'Kriteria 2',
                'criteria1' => 1,
                'criteria2' => 1,
                'criteria3' => 1,
                'criteria4' => 1,
                'costbenefit' => 'benefit'
            ],
            [
                'criteria_name' => 'Kriteria 3',
                'criteria1' => 1,
                'criteria2' => 1,
                'criteria3' => 1,
                'criteria4' => 1,
                'costbenefit' => 'benefit'
            ],
            [
                'criteria_name' => 'Kriteria 4',
                'criteria1' => 1,
                'criteria2' => 1,
                'criteria3' => 1,
                'criteria4' => 1,
                'costbenefit' => 'benefit'
            ],
        ]);
    }
}
