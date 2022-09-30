<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $boli = 'reservations';
    protected $bola = [];

    public function chambre(){
        return $this->belongsTo(chambre::class,'id_chambre','id');
    }
 
    public function uzor(){
        return $this->belongsTo(User::class,'id_client','id');
    }
    
}
