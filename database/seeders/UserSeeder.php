<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'id_admin' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
//        User::create([
//            'email' => 'mahasiswa1@gmail.com',
//            'id_mahasiswa' => 1,
//            'role' => 'mahasiswa',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'mahasiswa2@gmail.com',
//            'id_mahasiswa' => 2,
//            'role' => 'mahasiswa',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'mahasiswa3@gmail.com',
//            'id_mahasiswa' => 3,
//            'role' => 'mahasiswa',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'mahasiswa4@gmail.com',
//            'id_mahasiswa' => 4,
//            'role' => 'mahasiswa',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'mahasiswa5@gmail.com',
//            'id_mahasiswa' => 5,
//            'role' => 'mahasiswa',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'kpsd3akt@gmail.com',
//            'id_dosen' => 11,
//            'role' => 'dosen',
//            'subrole' => 'kps',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//
//        User::create([
//            'email' => 'kpsd4akm@gmail.com',
//            'id_dosen' => 12,
//            'role' => 'dosen',
//            'subrole' => 'kps',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//
//        User::create([
//            'email' => 'kpsd4keu@gmail.com',
//            'id_dosen' => 13,
//            'role' => 'dosen',
//            'subrole' => 'kps',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//
//        //      Seeder untuk dosen
//        User::create([
//            'email' => 'dosenjoko@gmail.com',
//            'id_dosen' => 1,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosensupri@gmail.com',
//            'id_dosen' => 2,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosenbudi@gmail.com',
//            'id_dosen' => 3,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosensusi@gmail.com',
//            'id_dosen' => 4,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosensiti@gmail.com',
//            'id_dosen' => 5,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosenrudi@gmail.com',
//            'id_dosen' => 6,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosenrina@gmail.com',
//            'id_dosen' => 7,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosenroni@gmail.com',
//            'id_dosen' => 8,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosendoni@gmail.com',
//            'id_dosen' => 9,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
//        User::create([
//            'email' => 'dosendini@gmail.com',
//            'id_dosen' => 10,
//            'role' => 'dosen',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password')
//        ]);
    }
}
