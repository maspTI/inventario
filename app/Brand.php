<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function patterns()
    {
        return $this->hasMany(Pattern::class);
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
    public function computerBrands()
    {
        return $this->where(function ($query) {
            $query->whereHas('devices', function ($query) {
                $query->whereIn('category_id', [1, 2, 3]);
            });
        })->orderBy('name')->get();
    }

    public function search(array $filters = null)
    {
        if ($filters) {
            return [];
        }
        return $this->all();
    }
}
