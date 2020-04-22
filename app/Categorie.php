<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $timestamps = false;

    public function ateliers() 
    { 
        return $this->hasMany(Atelier::class); 
    }
}
