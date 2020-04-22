<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(Categories_WorkshopsTableSeeder::class);
        // $this->call(WorkshopsTableSeeder::class);
=======
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AteliersTableSeeder::class);
>>>>>>> dev
    }
}
