<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::updateOrCreate(
            ['email' => 'dosen@telkomuniversity.ac.id'], // Parameter pencarian berdasarkan email
            [
                'name' => 'Dr. Ir. Budi Santoso, M.T.',
                'email' => 'dosen@telkomuniversity.ac.id',
                'password' => Hash::make('password123'),
                'role' => 'Dosen',
                'nomor_induk' => '197001011994031001',
            ],
        );
    }
}
