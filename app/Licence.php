<?php

namespace App;

use Carbon\Carbon;
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

    public function changeStatus()
    {
        $this->update([
            'status' =>  $this->status != null ? null : Carbon::now(),
        ]);

        return $this;
    }

    /**
     *
     */
    public function search(array $filters = null)
    {
        return $this->where('department_id', auth()->user()->department_id)
            ->where(function ($query) {
                if (auth()->user()->subdepartment) {
                    return $query->where('subdepartment_id', auth()->user()->subdepartment->id);
                }
            })
            ->where(function ($query) use ($filters) {
                $query->orWhereHas('seller', function ($query) use ($filters) {
                    $query->where('name', 'LIKE', "%{$filters['search']}%")
                        ->orWhere('cnpj', 'LIKE', "%{$filters['search']}%");
                })
                ->orWhereJsonContains('notes', ['description' => strtolower($filters['search'])])
                ->orWhereJsonContains('notes', ['specification' => strtolower($filters['search'])]);
            })
            ->with([
                'department', 'seller'
            ])
            ->orderBy('due_date', 'asc')
            ->paginate($filters['paginate'] == 'all' ? $this->count('id') : $filters['paginate']);
    }
}
