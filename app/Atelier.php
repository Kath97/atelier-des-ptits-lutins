<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atelier extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'status', 'datetime', 'categorie_id'];

    public function categorie()
    { 
        return $this->belongsTo(Categorie::class); 
    }
}
