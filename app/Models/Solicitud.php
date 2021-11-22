<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected  $fillable =[
    "user_id",
    "codigo_generado",
    "codigo_enviado",
    "foto",
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
