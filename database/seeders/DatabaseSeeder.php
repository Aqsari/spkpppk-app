<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ValuesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admins',
            'username' => 'admin',
            'password' => 'aaaa',
        ]);

        $this->call(ValuesTableSeeder::class);
        $this->call(valueCriteriaTabelSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(PerhitunganAHPTableSeeder::class);
        $this->call(PerhitunganWaspasTableSeeder::class);
    }
}
