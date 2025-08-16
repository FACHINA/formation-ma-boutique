<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'titre',
        'resume',
        'image',
        'description',
        'slug',
    ];
}
