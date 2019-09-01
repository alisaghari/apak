<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    protected $table = 'products_categories';
    protected $fillable = [
        'name','parent_id',
    ];
}
