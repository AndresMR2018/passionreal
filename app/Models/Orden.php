<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Credito;

class Orden extends Model
{
    use HasFactory;

    public function credito(){
        return $this->hasOne(Credito::class);
    }
}
