<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Credito;

class Carrito extends Model
{
    use HasFactory;
    public function credito(){
        return $this->belongsTo(Credito::class);
    }
}
