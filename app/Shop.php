<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'id',
        'shop_name' ,
        'testimony_shop',
        'about_shop',
        'stripe_id',
        'seller_id',
        'image',
    ];
}
