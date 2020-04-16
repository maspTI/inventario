<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'brand_id','seller_id','holder_id','pattern_id','category_id','department_id','ticket_number','bought_at','property_tag','specifications'
    ];

    protected $casts = ['specifications' => 'array'];
}
