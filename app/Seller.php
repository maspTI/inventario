<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = ['name', 'cnpj'];

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    /**
     *
     */
    public function licences()
    {
        return $this->hasMany(Licence::class);
    }

    public function search(array $filters = null)
    {
        if ($filters) {
            return [];
        }
        return $this->all();
    }
}
