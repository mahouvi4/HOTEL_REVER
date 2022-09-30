<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class image_hotel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $tox = 'image_hotels';
    protected $tinx = [];
    
}
