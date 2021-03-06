<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartidaImage extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**Relación de 1 a muchos INVERSA */
    public function partida()
    {
        return $this->belongsTo(Partida::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
