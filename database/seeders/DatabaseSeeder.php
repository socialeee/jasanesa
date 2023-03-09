<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Consultant;
use App\Models\sport;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        User::factory(10)->create();
        User::factory()->count(10)->create();
        $this->call(FacultySeeder::class);
        $this->call(ProdiSeeder::class);
        Consultant::factory()->count(10)->create();
        sport::factory()->count(10)->create();
        $this->call(HarisSeeder::class);
        $this->call(ScheduleSeeder::class);
    }
}
