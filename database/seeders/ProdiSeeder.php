<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodis')->insert([
            'name' => 'hukum',
        ]);
        DB::table('prodis')->insert([
            'name' => 'olahraga',
        ]);
        DB::table('prodis')->insert([
            'name' => 'sejarah',
        ]);
        DB::table('prodis')->insert([
            'name' => 'kepelatihan',
        ]);
        DB::table('prodis')->insert([
            'name' => 'akuntasi',
        ]);
        DB::table('prodis')->insert([
            'name' => 'matematika',
        ]);
        
    }
}
