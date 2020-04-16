<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand_id','seller_id','holder_id','pattern_id','category_id','department_id','ticket_number','bought_at','property_tag','specifications','status'
    ];

    protected $casts = ['specifications' => 'array'];

    public function holder()
    {
        return $this->belongsTo(User::class, 'holder_id')->with(['department', 'roles']);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function pattern()
    {
        return $this->belongsTo(Pattern::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function search(array $filters = null)
    {
        if ($filters) {
            return [];
        }
        return $this->all();
    }
}
