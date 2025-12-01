<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder default dari Laravel
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        // 🔹 Tambahkan seeder buatan kita
        $this->call([
            AdminSeeder::class,
            BukuSeeder::class,
            AnggotaSeeder::class
        ]);
    }
}
