<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'brand_id','seller_id','holder_id','pattern_id','category_id','department_id', 'subdepartment_id','ticket_number','bought_at','property_tag','specifications','status'
    ];

    protected $casts = ['specifications' => 'array'];

    public function holder()
    {
        return $this->belongsTo(User::class, 'holder_id')->with(['department', 'subdepartment', 'roles']);
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
            return $this->where('department_id', auth()->user()->department_id)
                ->where(function ($query) {
                    if (auth()->user()->subdepartment) {
                        return $query->where('subdepartment_id', auth()->user()->subdepartment->id);
                    }
                })
                ->with([
                    'department', 'holder', 'brand', 'category', 'seller', 'pattern'
                ])
                ->paginate($filters['paginate']);
        }
        return $this->all();
    }
}
