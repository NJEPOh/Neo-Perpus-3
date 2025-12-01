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
            [
                'judul' => 'Python untuk Data Science',
                'penulis' => 'Budi Santoso',
                'penerbit' => 'Data Media',
                'kategori' => 'Pemrograman',
                'tahun_terbit' => 2023,
                'deskripsi' => 'Pemanfaatan Python untuk analisis data dan machine learning.',
                'stok' => 15,
            ],
            [
                'judul' => 'Keamanan Siber Dasar',
                'penulis' => 'Doni Kurniawan',
                'penerbit' => 'Cyber Shield',
                'kategori' => 'Teknologi',
                'tahun_terbit' => 2022,
                'deskripsi' => 'Panduan menjaga keamanan data di era digital.',
                'stok' => 6,
            ],
            [
                'judul' => 'React Native untuk Pemula',
                'penulis' => 'Hafiz Alif',
                'penerbit' => 'Code House',
                'kategori' => 'Pemrograman',
                'tahun_terbit' => 2023,
                'deskripsi' => 'Membangun aplikasi mobile Android dan iOS dengan React Native.',
                'stok' => 9,
            ],
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustaka',
                'kategori' => 'Novel',
                'tahun_terbit' => 2005,
                'deskripsi' => 'Kisah inspiratif perjuangan anak-anak Belitong menggapai mimpi.',
                'stok' => 20,
            ],
            [
                'judul' => 'Bumi Manusia',
                'penulis' => 'Pramoedya Ananta Toer',
                'penerbit' => 'Lentera Dipantara',
                'kategori' => 'Sastra Sejarah',
                'tahun_terbit' => 1980,
                'deskripsi' => 'Roman sejarah pergerakan nasional di awal abad 20.',
                'stok' => 15,
            ],
            [
                'judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'penerbit' => 'Gramedia Pustaka Utama',
                'kategori' => 'Fiksi Ilmiah',
                'tahun_terbit' => 2016,
                'deskripsi' => 'Kisah persahabatan dan cinta berlatar masa depan.',
                'stok' => 18,
            ],
            [
                'judul' => 'Filosofi Kopi',
                'penulis' => 'Dee Lestari',
                'penerbit' => 'Bentang Pustaka',
                'kategori' => 'Kumpulan Cerpen',
                'tahun_terbit' => 2006,
                'deskripsi' => 'Kumpulan cerita dan prosa satu dekade.',
                'stok' => 10,
            ],
            [
                'judul' => 'Laut Bercerita',
                'penulis' => 'Leila S. Chudori',
                'penerbit' => 'KPG',
                'kategori' => 'Novel Sejarah',
                'tahun_terbit' => 2017,
                'deskripsi' => 'Novel tentang persahabatan, cinta, dan penghilangan paksa aktivis.',
                'stok' => 12,
            ],
            [
                'judul' => 'Psikologi Uang',
                'penulis' => 'Morgan Housel',
                'penerbit' => 'Baca',
                'kategori' => 'Bisnis',
                'tahun_terbit' => 2021,
                'deskripsi' => 'Pelajaran abadi mengenai kekayaan, ketamakan, dan kebahagiaan.',
                'stok' => 14,
            ],
            [
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'penerbit' => 'Kompas',
                'kategori' => 'Pengembangan Diri',
                'tahun_terbit' => 2019,
                'deskripsi' => 'Penerapan filsafat Stoa untuk mental yang tangguh masa kini.',
                'stok' => 25,
            ],
            [
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'penerbit' => 'Gramedia Pustaka Utama',
                'kategori' => 'Pengembangan Diri',
                'tahun_terbit' => 2019,
                'deskripsi' => 'Perubahan kecil yang memberikan hasil luar biasa.',
                'stok' => 30,
            ],
            [
                'judul' => 'Digital Marketing 101',
                'penulis' => 'Eko Pratama',
                'penerbit' => 'Bisnis Media',
                'kategori' => 'Bisnis',
                'tahun_terbit' => 2022,
                'deskripsi' => 'Strategi pemasaran digital untuk UMKM.',
                'stok' => 11,
            ],
            [
                'judul' => 'Sepuluh Dosa Besar Admin',
                'penulis' => 'Yanto Ferry',
                'penerbit' => 'Elex Media Komputindo',
                'kategori' => 'Teknologi Informasi',
                'tahun_terbit' => 2020,
                'deskripsi' => 'Kesalahan umum yang harus dihindari oleh admin sistem.',
                'stok' => 13,
            ]
        ];
        Buku::insert($data);
    }
}
