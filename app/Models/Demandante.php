<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandante extends Model
{
    use HasFactory;
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
    public function demandanteProceso(){
        return $this->hasMany(DemandanteProceso::class);
    }
}
