<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Credito;

class Orden extends Model
{
    public $timestamps = false;
    protected $fillable=[
        "user_id",
        "fecha_orden",
        "subtotal"
    ];

    public function credito(){
        return $this->hasOne(Credito::class);
    }
}
