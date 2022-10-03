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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'admin' => 1,
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('1234')
        ]);
        User::create([
            'admin' => 1,
            'name' => 'develop',
            'email' => 'develop@email.com',
            'password' => Hash::make('1234')
        ]);
    }
}
