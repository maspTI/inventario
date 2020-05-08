<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function search(array $filters = null)
    {
        if ($filters) {
            return [];
        }
        return $this->all();
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
}
