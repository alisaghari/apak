<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title', 'image',
    ];
}
