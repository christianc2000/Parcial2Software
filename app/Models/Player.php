<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    /**relación de 1 a muchos inversa */
    public function perfilUser(){
        return $this->belongsTo(PerfilUser::class);
    }

    public function partida(){
        return $this->belongsTo(Partida::class);
    }

    public function tipoPlayer(){
        return $this->belongsTo(TipoPlayer::class);
    }
}
