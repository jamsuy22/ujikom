<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Bengkel;
use App\Models\Layanan;
use App\Models\Pelanggan;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // USER
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
        );

        User::factory(5)->create();

        // BENGKEL
        Bengkel::insert([
            [
                'nama_bengkel' => 'Bengkel Jaya Motor',
                'alamat' => 'Jl. Raya Banjar No.1',
                'deskripsi' => 'Spesialis motor matic',
                'no_telp' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bengkel' => 'Bengkel Makmur',
                'alamat' => 'Jl. Nasional No.12',
                'deskripsi' => 'Servis umum semua motor',
                'no_telp' => '082345678901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // LAYANAN
        Layanan::insert([
            [
                'nama_layanan' => 'Servis Ringan',
                'deskripsi' => 'Ganti oli + cek mesin',
                'harga' => 50000,
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Servis Besar',
                'deskripsi' => 'Bongkar mesin total',
                'harga' => 150000,
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // PELANGGAN
        Pelanggan::factory(10)->create();
    }
}