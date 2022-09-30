<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class chambre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $ko = 'chambres';
    protected $ka = [];

 public function categorie(){
    return $this->belongsTo(categorie::class,'id_categorie','id');
 }

 public function images_hot(){
    return $this->hasMany(image_hotel::class,'id_chambre','id');
 }

 public function resto(){
    return $this->hasMany(divers_resto::class,'id_chambre','id');
 }
}
