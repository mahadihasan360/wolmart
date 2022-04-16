<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::create([
            "name"    => "Super Admin",
            "role_id" => 1,
            "email"   => "admin@gmail.com",
            "password"=>Hash::make("14311493"),
        ]);
    }
}
