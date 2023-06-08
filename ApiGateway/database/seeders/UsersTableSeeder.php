<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::create([
            'name' => 'SegundaSeha', 
            'email' => 'longskebalasabas@gmail.com',
            'password' => Hash::make('metsuji')
        ]);
    }
}