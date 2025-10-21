<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::firstOrCreate(
            ['username' => 'admin'], // cari dulu apakah sudah ada
            [
                'nama' => 'admin',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
