<?php

use Illuminate\Database\Seeder;

class AteliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Atelier::create(
            [
                'name' => 'Atelier Wax',
                'description'=>'Atelier de création de bijoux en Wax',
                'status'=>'clôturé',
                'datetime'=>date("Y-m-d H:i:s"),
                'categorie_id' =>1
            ]
        );   
    }
}
