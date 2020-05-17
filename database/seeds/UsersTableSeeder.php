<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Philipsen Jan',
            'email' => 'janphilipsen@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Philipsen Annebeth',
            'email' => 'annebethp@hotmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Philipsen Wout',
            'email' => 'philipsenwout@hotmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Toon Claes',
            'email' => 'tewain85@outlook.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Wim Geudens',
            'email' => 'wim_g@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
