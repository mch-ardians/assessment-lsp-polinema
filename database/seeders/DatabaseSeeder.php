<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mochammad Ardiansyah',
            'email' => 'ardianbro1310@gmail.com',
            'password' => bcrypt('mch-ardians'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730016',
            'tgl' => '2023-11-13',
        ]);
    }
}
