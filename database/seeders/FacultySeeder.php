<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            'name' => 'Fakultas Ilmu Sosial & Hukum',
        ]);
        DB::table('faculties')->insert([
            'name' => 'Fakultas Ekonomi & Bisnis',
        ]);
        DB::table('faculties')->insert([
            'name' => 'Fakultas Matematika & IPA',
        ]);
        DB::table('faculties')->insert([
            'name' => 'Fakultas Teknik',
        ]);
        DB::table('faculties')->insert([
            'name' => 'Fakultas Vokasi',
        ]);
        DB::table('faculties')->insert([
            'name' => 'Fakultas Ilmu Pendidikan',
        ]);
        DB::table('faculties')->insert([
            'name' => 'Fakultas Ilmu Olahraga',
        ]);
        DB::table('faculties')->insert([
            'name' => 'Fakultas Seni & Budaya',
        ]);
    }
}
