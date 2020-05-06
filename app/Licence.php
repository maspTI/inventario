<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licence extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'department_id','subdepartment_id','seller_id','name','description','renewal_term','value','bought_at', 'due_date','notes', 'status'
    ];

    protected $casts = ['notes' => 'array'];

    /**
     *
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     *
     */
    public function subdepartment()
    {
        return $this->belongsTo(Subdepartment::class);
    }

    /**
     *
     */
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    /**
     *
     */
    public function getValueAttribute($value) : string
    {
        return number_format($value, 2, ',', '.');
    }

    /**
     *
     */
    public function search(array $filters = null)
    {
        if ($filters) {
            return $this->with('seller')->paginate($filters['paginate']);
        }
        return $this->all();
    }
}
