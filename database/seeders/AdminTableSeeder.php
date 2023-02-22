<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $token = substr(str_shuffle(str_repeat($pool, 5)), 0, 10);
        User::create([
            'name'=>'Admin',
            'username'=>'admin',
            'email'=>'admin@mail.com',
            'role_id'=>1,
            'nohp'=>'098123131',
            'password'=>Hash::make('password'),
            'email_verified_at'=>now(),
            'remember_token'=>$token,
            // 'address'=>'Your Systme'
        ]);
    }
}
