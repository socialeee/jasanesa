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
            'jadwal' => '08:00 - 09:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '09:00 - 10:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '10:00 - 11:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '11:00 - 12:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '12:00 - 13:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '13:00 - 14:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '14:00 - 15:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '15:00 - 16:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '16:00 - 17:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '17:00 - 18:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '18:00 - 19:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '19:00 - 20:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '20:00 - 21:00'
        ]);
        DB::table('schedules')->insert([
            'jadwal' => '21:00 - 22:00'
        ]);
    }
}
