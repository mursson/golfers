<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                //Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'email_verified_at' => null,
            'password' => bcrypt('1234'),
            'role' => 0
        ]);     

        //Golfer
        User::create([
            'name' => 'Antonio',
            'email' => 'mur@localhost',
            'email_verified_at' => null,
            'password' => bcrypt('1234'),
            'role' => 1
        ]);
        User::create([
            'name' => 'Micha',
            'email' => 'micha@localhost',
            'email_verified_at' => null,
            'password' => bcrypt('1234'),
            'role' => 1
        ]);
        User::create([
            'name' => 'Victor',
            'email' => 'victor@localhost',
            'email_verified_at' => null,
            'password' => bcrypt('1234'),
            'role' => 1
        ]);
        User::create([
            'name' => 'Pierre',
            'email' => 'pierre@localhost',
            'email_verified_at' => null,
            'password' => bcrypt('1234'),
            'role' => 1
        ]); 

        //Invitado
        User::create([
            'name' => 'Guest',
            'email' => 'guest@localhost',
            'email_verified_at' => null,
            'password' => bcrypt('1234'),
            'role' => 2
        ]);  
    }
}
