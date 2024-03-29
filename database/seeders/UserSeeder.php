<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'Daniel Rodriguez',
            'email' => 'rodriguezdaniel048@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'full_name' => 'Camilo Rodriguez',
            'email' => 'camilo048@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::factory(10)->create();
    }
}
