<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Paquete;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciudad',
        'telefono',
        'direccion',
        'edad',
        'foto',
        'categoria_id',
        'user_id',
        'paquete_id',
        'zona',
        'titulo',
        'descripcion'
    ];

    public function categoria(){

        return $this->belongsTo(Categoria::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function paquete(){
        return $this->hasOne(Paquete::class);
    }
}
