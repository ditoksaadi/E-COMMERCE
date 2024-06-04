<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Biodataseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biodata::create([
            "id" => "12",
            "nama" => "yuda",
            "alamat" => "srikandi",
            "jurusan" => "sistem informasi",
            "email" => "yuda@gmail.com",
        ]);
    }
}
