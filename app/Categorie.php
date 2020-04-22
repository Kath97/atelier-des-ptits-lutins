<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
<<<<<<< HEAD
    //
}
=======
    public $timestamps = false;

    public function ateliers() 
    { 
        return $this->hasMany(Atelier::class); 
    }
}
>>>>>>> dev
