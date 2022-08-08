<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([

            'name' => 'Seema',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('password'),

        ]);
    }
}
