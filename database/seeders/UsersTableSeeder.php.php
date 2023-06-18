<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "id" => 1,
                "name" => "alif",
                "password" => Hash::make("makanikan"),
                "email" => "irhasalif@gmail.com",
                "email_verified_at" => null,
                "role" => "admin",
            ],
            [
                "id" => 2,
                "name" => "staff",
                "password" => Hash::make("staff1234"),
                "email" => "staff@gmail.com",
                "email_verified_at" => null,
                "role" => "staff",
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'id' => $user['id'],
                'name' => $user['name'],
                'password' => $user['password'],
                'email' => $user['email'],
                'email_verified_at' => $user['email_verified_at'],
                'role' => $user['role'],
            ]);
        }
    }
}
