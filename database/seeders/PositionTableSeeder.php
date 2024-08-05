<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_position')->insert([
            [
                'name' => "GTT",
            ],
            [
                'name' => "PTT",
            ],
            [
                'name' => "Petugas K3",
            ],
            [
                'name' => "Peyuluh Agama Non ASN",
            ],
            [
                'name' => "Guru",
            ],
            [
                'name' => "Tenaga Kesehatan",
            ],
            [
                'name' => "Tenaga Teknis/Administratif",
            ],
            [
                'name' => "Tenaga Fungsional",
            ],
            [
                'name' => "Tenaga Lapangan",
            ],
            [
                'name' => "Tenaga Penunjang",
            ],
        ]);
    }
}
