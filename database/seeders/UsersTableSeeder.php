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
            'id' => 1,
            'name' => "taro",
            'email' => "test1@gmail.com",
            'password' => "testpass1",
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => "jiro",
            'email' => "test2@gmail.com",
            'password' => "testpass2",
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => "saburo",
            'email' => "test3@gmail.com",
            'password' => "testpass3",
        ]);
    }
}
