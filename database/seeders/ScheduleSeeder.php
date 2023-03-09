<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            'jam' => '08:00 - 09:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '09:00 - 10:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '10:00 - 11:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '11:00 - 12:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '12:00 - 13:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '13:00 - 14:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '14:00 - 15:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '15:00 - 16:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '16:00 - 17:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '17:00 - 18:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '18:00 - 19:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '19:00 - 20:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '20:00 - 21:00'
        ]);
        DB::table('schedules')->insert([
            'jam' => '21:00 - 22:00'
        ]);
    }
}
