<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'mimic',
                'email' => 'test@test.com',
                'password' => Hash::make('testtest1234567890'),
            ],
            [
                'name' => 'mimic',
                'email' => 'mimic@mimic.com',
                'password' => Hash::make('password5678'),
            ],
        ]);
    }
}
