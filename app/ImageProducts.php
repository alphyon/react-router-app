<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProducts extends Model
{
    protected $fillable =[
        'image',
        'product_id',
    ];
}
