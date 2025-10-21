<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Pemrograman Laravel Dasar',
                'penulis' => 'Hafidz Alif',
                'penerbit' => 'TeknoPress',
                'kategori' => 'Pemrograman',
                'tahun_terbit' => 2023,
                'deskripsi' => 'Panduan belajar framework Laravel bagi pemula.',
                'stok' => 10,
            ],
            [
                'judul' => 'Desain UI Modern dengan Figma',
                'penulis' => 'Rizky Hadi',
                'penerbit' => 'Creative Studio',
                'kategori' => 'Desain',
                'tahun_terbit' => 2022,
                'deskripsi' => 'Langkah-langkah merancang antarmuka modern menggunakan Figma.',
                'stok' => 7,
            ],
            [
                'judul' => 'Algoritma dan Struktur Data',
                'penulis' => 'Dewi Kartika',
                'penerbit' => 'Informatika',
                'kategori' => 'Komputer',
                'tahun_terbit' => 2021,
                'deskripsi' => 'Pembahasan komprehensif tentang algoritma dasar hingga kompleks.',
                'stok' => 12,
            ],
            [
                'judul' => 'Jaringan Komputer untuk Mahasiswa',
                'penulis' => 'Andi Prasetyo',
                'penerbit' => 'ITBooks',
                'kategori' => 'Teknologi',
                'tahun_terbit' => 2020,
                'deskripsi' => 'Pengenalan konsep jaringan komputer modern.',
                'stok' => 8,
            ],
            [
                'judul' => 'Dasar Pemikiran Filsafat Islam',
                'penulis' => 'A. Khudori Soleh',
                'penerbit' => 'LKiS',
                'kategori' => 'Filsafat',
                'tahun_terbit' => 2019,
                'deskripsi' => 'Pengantar pemikiran Islam dari klasik hingga kontemporer.',
                'stok' => 5,
            ],
        ];

        Buku::insert($data);
    }
}
