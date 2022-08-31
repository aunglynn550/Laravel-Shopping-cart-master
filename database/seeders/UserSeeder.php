<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::create([
            'name' => 'aunglynn',
            'email' => 'aunglynn@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Super',
            'is_admin'=>1,
            'is_approved'=>1 ]);

            \App\Models\User::create([
                'name' => 'changyi',
                'email' => 'changyi@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'normal user',
                'is_admin'=>0,
                'is_approved'=>0 ]);
    }
}
