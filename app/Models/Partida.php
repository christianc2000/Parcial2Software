<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    /**Relación de 1 a muchos Inversa */
    public function nivel(){
        return $this->belongsTo(Nivel::class);
    }
    /**Relación de 1 a muchos */
    public function players(){
        return $this->hasMany(Player::class);
    }
    public function partidaImages(){
        return $this->hasMany(PartidaImage::class);
    }
}
