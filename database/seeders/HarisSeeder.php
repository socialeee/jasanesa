<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('haris')->insert([
            'Hari' => 'Senin',
        ]);
        DB::table('haris')->insert([
            'Hari' => 'Selasa'
        ]);
        DB::table('haris')->insert([
            'Hari' => 'Rabu'
        ]);
        DB::table('haris')->insert([
            'Hari' => 'Kamis'
        ]);
        DB::table('haris')->insert([
            'Hari' => 'Jumat'
        ]);
        DB::table('haris')->insert([
            'Hari' => 'Sabtu'
        ]);
        DB::table('haris')->insert([
            'Hari' => 'Minggu'
        ]);
    }
}
