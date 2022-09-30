<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class divers_resto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $jok = 'divers_restos';
       protected $jik = [];
}
