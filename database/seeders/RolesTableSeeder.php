<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
        	['role_name' => 'Admin', 'url' => '/admin', 'created_at' => now(), 'updated_at' => now()],
        	['role_name' => 'User', 'url' => '/user', 'created_at' => now(), 'updated_at' => now()],
        	['role_name' => 'Guest', 'url' => '/guest', 'created_at' => now(), 'updated_at' => now()],
       ]);
    }
}
