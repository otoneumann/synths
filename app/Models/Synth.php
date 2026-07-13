<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Synth extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'brand',
    ];

}
