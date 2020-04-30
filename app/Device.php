<?php

namespace App;

use Carbon\Carbon;
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

    public function changeStatus()
    {
        $this->update([
            'status' =>  $this->status != null ? null : Carbon::now(),
            'holder_id' => null
        ]);

        return $this;
    }

    public function search(array $filters = null)
    {
        return $this->where('department_id', auth()->user()->department_id)
            ->where(function ($query) {
                if (auth()->user()->subdepartment) {
                    return $query->where('subdepartment_id', auth()->user()->subdepartment->id);
                }
            })
            ->where(function ($query) use ($filters) {
                $query->whereHas('brand', function ($query) use ($filters) {
                    $query->where('name', 'LIKE', "%{$filters['search']}%");
                })
                ->orWhereHas('category', function ($query) use ($filters) {
                    $query->where('name', 'LIKE', "%{$filters['search']}%");
                })
                ->orWhereHas('pattern', function ($query) use ($filters) {
                    $query->where('name', 'LIKE', "%{$filters['search']}%");
                })
                ->orWhereHas('seller', function ($query) use ($filters) {
                    $query->where('name', 'LIKE', "%{$filters['search']}%")
                        ->orWhere('cnpj', 'LIKE', "%{$filters['search']}%");
                })
                ->orWhere('property_tag', "LIKE", "%{$filters['search']}%")
                ->orWhereJsonContains('specifications', ['description' => strtolower($filters['search'])])
                ->orWhereJsonContains('specifications', ['specification' => strtolower($filters['search'])]);
            })
            ->whereHas('brand', function ($query) use ($filters) {
                $query->where('name', "LIKE", $filters['brand'] == 'all' ? '%%' : "%{$filters['brand']}%");
            })
            ->whereHas('category', function ($query) use ($filters) {
                $query->where('name', "LIKE", $filters['category'] == 'all' ? '%%' : "%{$filters['category']}%");
            })
            ->with([
                'department', 'holder', 'brand', 'category', 'seller', 'pattern'
            ])
            ->paginate($filters['paginate']);
    }
}
