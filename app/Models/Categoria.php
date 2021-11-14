<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anuncio;

class Categoria extends Model
{
    use HasFactory;

    public function anuncios(){
        return $this->hasMany(Anuncio::class);
    }
}
