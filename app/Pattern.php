<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Pattern extends Model
{
    protected $fillable = ['name', 'brand_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    /**
     *
     */
    public function countDevices()
    {
        return $this->devices()
            ->where('department_id', auth()->user()->department_id)
            ->count('id');
    }

    /**
     *
     */
    public function computerPatterns()
    {
        return $this->where(function ($query) {
            $query->whereHas('devices', function ($query) {
                $query->whereIn('category_id', [1, 2, 3]);
            });
        })->orderBy('name')->get();
    }

    public function search(array $filters) : Collection
    {
        if (count($filters) > 1) {
            return $this->where('brand_id', $filters['brand'])->orderBy('name')->get();
        }
        return $this->where('brand_id', $filters['brand'])->orderBy('name')->get();
    }
}
