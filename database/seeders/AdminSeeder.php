<?php

namespace Database\Seeders;

use Illuminate\Database\Seeders;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name'=>'Admin',
          'email'=>'admin@gmail.com',
          'tele'=>'1-876-7636790',
          'password'=>Hash::make('Admin1234'),
        ]);
    }
}
