<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anuncio;

class Paquete extends Model
{
    public $fillable=[
        'periodo_horas'
    ];

    public function anuncio(){
        return $this->belongsTo(Anuncio::class);
    }
}
