<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class fonctionaire extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $box = 'fonctionaires';
    protected $bax = [];

    public function departement(){
        return $this->belongsTo(departement::class,'id_departement','id');
    }

    public function categorie(){
      return $this->belongsTo(categorie::class,'id_categorie','id');
    }
}
