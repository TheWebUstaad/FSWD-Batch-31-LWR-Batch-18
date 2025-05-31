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
        DB::table("users")->insert([
            "role_id" => 1,
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("pas@admin"),
        ]);

         DB::table("users")->insert([
            "role_id" => 1,
            "name" => "User",
            "email" => "user@gmail.com",
            "password" => bcrypt("pass@user"),
        ]);
    }
}
