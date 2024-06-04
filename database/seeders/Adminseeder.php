<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "id" => 1,
            "name" => "admin",
            "email" => "admin123@gmail.com",
            "password" => bcrypt("admin123"),
        ]);
    }
}
