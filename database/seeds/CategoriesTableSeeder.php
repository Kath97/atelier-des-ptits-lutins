<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //
=======
        App\Categorie::create(
            [
                'name' => 'Bijoux'
            ]
        );

        App\Categorie::create(
            [
                'name' => 'Fêtes'
            ]
        );
>>>>>>> dev
    }
}
