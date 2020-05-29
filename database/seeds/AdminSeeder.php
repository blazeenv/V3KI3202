<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => 1,
            'name' => 'adhin',
            'email' => 'adhinabe@gmail.com',
            'password' => Hash::make('password'),
            'type' => 1,
            'is_active' => 1,
            'remember_token' => str_random(10),
        ]);
    }
}
