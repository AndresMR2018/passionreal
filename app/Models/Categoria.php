<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anuncio;
use App\Models\Image;

class Categoria extends Model
{
 protected  $fillable =[
    'nombre',
   
    
    ];

    public function anuncios(){
        return $this->hasMany(Anuncio::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
