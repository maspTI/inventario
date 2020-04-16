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
}
