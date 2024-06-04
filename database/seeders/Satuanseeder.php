<?php

namespace Database\Seeders;

use App\Models\satuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Satuanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        satuan::create([
            "id" => 1,
            "nama" => "Set",
        ]);
        satuan::create([
            "id" => 2,
            "nama" => "pack",
        ]);
        satuan::create([
            "id" => 3,
            "nama" => "Unit",
        ]);
    }
}
