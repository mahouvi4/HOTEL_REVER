<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categorie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $yv = 'categories';
    protected $av = [];
}
