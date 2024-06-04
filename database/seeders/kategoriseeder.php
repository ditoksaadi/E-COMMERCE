<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kategori::create([
            "id" => 1,
            "nama" => "Smartphone",
        ]);
        kategori::create([
            "id" => 2,
            "nama" => "Laptop",
        ]);
            kategori::create([
                "id" => 3,
                "nama" => "Ipad",
        ]);
        kategori::create([
            "id" => 4,
            "nama" => "Headphone",
        ]);
        kategori::create([
            "id" => 5,
            "nama" => "Airpods",
        ]);
    }
}
