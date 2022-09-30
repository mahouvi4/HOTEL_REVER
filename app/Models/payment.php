<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class payment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $una = 'payments';
    protected $ina = [];

    public function fonctionaire(){
        return $this->belongsTo(fonctionaire::class,'id_fonctionaire','id');
    }
}
