<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'firstname' => 'Root',
            'email' => 'mangahua@gmail.com',
            'photo' => null,
            'phone' => '0709428873',
            'birth_date' => '2000-01-01',
            'address' => 'Plateau, Abidjan',
            'city' => 'Abidjan',
            'country' => 'CI',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Marie',
            'firstname' => 'Konan',
            'email' => 'enseignant@educplus.test',
            'photo' => null,
            'phone' => '0700033344',
            'birth_date' => '1985-05-15',
            'address' => 'Cocody Angré',
            'city' => 'Abidjan',
            'country' => 'CI',
            'role' => 'enseignant',
            'email_verified_at' => now(),
            'password' => bcrypt('enseignant123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Koffi',
            'firstname' => 'Junior',
            'email' => 'eleve@educplus.test',
            'photo' => null,
            'phone' => '0700055566',
            'birth_date' => '2010-07-10',
            'address' => 'Yopougon Sideci',
            'city' => 'Abidjan',
            'country' => 'CI',
            'role' => 'eleve',
            'email_verified_at' => now(),
            'password' => bcrypt('eleve123'),
            'remember_token' => Str::random(10),
             ]);

    }
}
