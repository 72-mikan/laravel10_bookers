<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "taro",
            'email' => "test1@gmail.com",
            'password' => "testpass1",
        ]);
        DB::table('users')->insert([
            'name' => "jiro",
            'email' => "test2@gmail.com",
            'password' => "testpass2",
        ]);
        DB::table('users')->insert([
            'name' => "saburo",
            'email' => "test3@gmail.com",
            'password' => "testpass3",
        ]);
    }
}
