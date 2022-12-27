<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            "user_name" => "admin",
            "user_email" => "admin@barbatos.com",
            "password" => Hash::make('admin123'),
            "user_gender" => "NA",
            "user_dob" => "2000-01-01",
            "user_country" => "ID",
            "user_role" => "admin"
        ]);
    }
}
