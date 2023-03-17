<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidangs')->insert([
            'name' => 'ilmu ekonomi',
        ]);
        DB::table('bidangs')->insert([
            'name' => 'ilmu agama & filsafat',
        ]);
        DB::table('bidangs')->insert([
            'name' => 'ilmu pendidikan',
        ]);
        DB::table('bidangs')->insert([
            'name' => 'seni, desain & media',
        ]);
        DB::table('bidangs')->insert([
            'name' => 'ilmu kesehatan',
        ]);
        DB::table('bidangs')->insert([
            'name' => 'ilmu sosial humaniora',
        ]);
    }
}
