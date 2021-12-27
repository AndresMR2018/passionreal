<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Credito;
use App\Models\User;

class Orden extends Model
{
    public $timestamps = false;
    protected $fillable=[
        "user_id",
        "dni",
        "telefono",
        "nombre_completo",
        "fecha_orden",
        "cantidad_creditos",
        "subtotal"
    ];

    public function credito(){
        return $this->hasOne(Credito::class);
    }

    public function user(){
        return $this->belongTo(User::class);
    }
}
