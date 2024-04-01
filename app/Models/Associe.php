<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associe extends Model
{
    use HasFactory;

    public function entreprise(){
        return $this->belongsToMany(Entreprise::class);
    }

    public function piece(){
        return $this->hasMany(Piece_jointe::class);
    }

}
