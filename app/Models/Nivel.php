<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    /**Relación de 1 a muchos */
    public function partidas(){
        return $this->hasMany(Partida::class);
    }

}
