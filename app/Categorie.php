<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $timestamps = false;

    public function workshops() 
    { 
        return $this->hasMany(Workshop::class); 
    }
}