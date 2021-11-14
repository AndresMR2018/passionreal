<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Paquete;

class Anuncio extends Model
{
    use HasFactory;

    public function categoria(){

        return $this->belongsTo(Categoria::class);
    }

    public function paquete(){
        return $this->hasOne(Paquete::class);
    }
}
