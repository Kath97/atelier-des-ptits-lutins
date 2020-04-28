<?php

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
        App\User::create(
            [
                'name' => 'lutins',
                'email' => 'atelierdesptitslutins@gmail.com',
                'password' => bcrypt('pass'),
                'role' => 1
            ]
        );

        App\User::create(
            [
                'name' => 'kath',
                'email' => 'kathleen.malialin@gmail.com',
                'password' => bcrypt('pass'),
                'role' => 2
            ]
        );
  
    }
}
