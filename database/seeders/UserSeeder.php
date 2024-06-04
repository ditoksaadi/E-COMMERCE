<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "id" => "1",
            "name" => "user",
            "email" => "user123@gmail.com",
            "password" => bcrypt('user123'),
            'nohp' => '08123456789',
            'negara' => 'Indonesia',
            'alamat_provinsi' => 'Riau',
            'alamat_kota' => 'Kuansing',
            'alamat_detail' => 'Riau,Kuansing,Jalan Melati 05',
        ]);
        User::create([
            "id" => "2",
            "name" => "john doe",
            "email" => "johndoe12@gmail.com",
            "password" => bcrypt('user123'),
            'nohp' => '08123456789',
            'negara' => 'Indonesia',
            'alamat_provinsi' => 'Riau',
            'alamat_kota' => 'Pekanbaru',
            'alamat_detail' => 'Riau,Pekanabaru,Jalan srikandi,koskosan pria muslim',
        ]);
        User::create([
            "id" => "3",
            "name" => "mina",
            "email" => "mina098@gmail.com",
            "password" => bcrypt('user123'),
            'nohp' => '08123456789',
            'negara' => 'Indonesia',
            'alamat_provinsi' => 'jawa barat',
            'alamat_kota' => 'Bandung',
            'alamat_detail' => 'Jawa barat,bandung,Jalan Melati gang melala',
        ]);

    }
}
