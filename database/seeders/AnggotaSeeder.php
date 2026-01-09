<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Anggota;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        // Password default untuk semua akun (biar mudah testing)
        $passwordDefault = Hash::make('nE0*P3rpU5');

        $data = [
            [
                'nama' => 'test user',
                'email' => 'test@example.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Andi Pratama',
                'email' => 'andi.pratama@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Siti Aminah',
                'email' => 'siti.aminah@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Budi Santoso',
                'email' => 'budi.santoso@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Citra Dewi',
                'email' => 'citra.dewi@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Doni Kurniawan',
                'email' => 'doni.kurniawan@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Eka Putri',
                'email' => 'eka.putri@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Fajar Nugraha',
                'email' => 'fajar.nugraha@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Gita Pertiwi',
                'email' => 'gita.pertiwi@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Hendra Wijaya',
                'email' => 'hendra.wijaya@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Indah Sari',
                'email' => 'indah.sari@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Joko Susilo',
                'email' => 'joko.susilo@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Kartika Yulianti',
                'email' => 'kartika.yulianti@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Lukman Hakim',
                'email' => 'lukman.hakim@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Maya Lestari',
                'email' => 'maya.lestari@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Nugroho Saputra',
                'email' => 'nugroho.saputra@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Olivia Manopo',
                'email' => 'olivia.manopo@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Putra Ramadhan',
                'email' => 'putra.ramadhan@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Qori Aulia',
                'email' => 'qori.aulia@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Rian Hidayat',
                'email' => 'rian.hidayat@student.com',
                'password' => $passwordDefault,
            ],
            [
                'nama' => 'Siska Wulandari',
                'email' => 'siska.wulandari@student.com',
                'password' => $passwordDefault,

            ],
        ];

        Anggota::insert($data);
    }
}
