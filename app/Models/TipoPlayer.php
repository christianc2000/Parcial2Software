<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlayer extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    /**Relación de 1 a muchos */
    public function players(){
        return $this->hasMany(Player::class);
    }
}
