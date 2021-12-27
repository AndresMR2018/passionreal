<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Solicitud extends Model
{
    protected  $fillable =[
    "user_id",
    "codigo_generado",
    "codigo_enviado",
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
