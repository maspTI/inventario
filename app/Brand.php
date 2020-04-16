<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function patterns()
    {
        return $this->hasMany(Pattern::class);
    }
}
