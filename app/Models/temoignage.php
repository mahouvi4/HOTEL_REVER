<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class temoignage extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function usox(){
        return $this->belongsTo(User::class,'id_client','id');
    }
}
