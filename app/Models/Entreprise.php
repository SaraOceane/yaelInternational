<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function formeJuridique(){
        return $this->belongsTo(Forme_juridique::class);
    }

    public function document(){
        return $this->hasMany(Document_final::class);
    }

    public function associe(){
        return $this->belongsToMany(Associe::class);
    }
}
