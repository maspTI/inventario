<?php

namespace App\Http\Controllers;

use App\User;
use App\Brand;
use App\Device;
use App\Seller;
use App\Pattern;
use App\Category;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->wantsJson()) {
            $devices = new Device;
            return $devices->search(request()->all());
        }
        return view('devices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        $categories = new Category;
        $brands = new Brand;
        $sellers = new Seller;
        $users = new User;

        return view('devices.create')->with([
            'categories' => $categories->search(),
            'brands' => $brands->search(),
            'sellers' => $sellers->search(),
            'users' => $users->search(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : void
    {
        $this->requestValidate($request);

        Device::Create([
            'brand_id' => request('brand')['id'],
            'seller_id' => request('seller')['id'],
            'holder_id' => request('holder')['id'],
            'pattern_id' => request('pattern')['id'],
            'category_id' => request('category')['id'],
            'ticket_number' => request('ticket_number'),
            'bought_at' => request('bought_at') != null ? new Carbon(request('bought_at')) : null,
            'property_tag' => request('property_tag'),
            'serial_number' => request('serial_number'),
            'specifications' => request('specifications'),
            'status' => Carbon::now(),
            'department_id' => auth()->user()->department->id,
            'subdepartment_id' => auth()->user()->subdepartment != null ? auth()->user()->subdepartment->id : null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        $categories = new Category;
        $brands = new Brand;
        $sellers = new Seller;
        $users = new User;

        return view('devices.edit')->with([
            'device' => Device::whereId($device->id)->with('category', 'brand', 'holder', 'seller', 'pattern')->first(),
            'categories' => $categories->search(),
            'brands' => $brands->search(),
            'patterns' => $device->brand->patterns,
            'sellers' => $sellers->search(),
            'users' => $users->search(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        if (request()->has('change_status')) {
            $device = Device::whereId($device->id)->with('holder')->first();
            return $device->changeStatus()->fresh();
        }

        $this->requestValidate($request, $device);

        return $device->update([
            'brand_id' => request('brand')['id'],
            'seller_id' => request('seller') != null ? request('seller')['id'] : null,
            'holder_id' => request('holder') != null ? request('holder')['id'] : null,
            'pattern_id' => request('pattern')['id'],
            'category_id' => request('category')['id'],
            'ticket_number' => request('ticket_number'),
            'bought_at' => request('bought_at') != null ? new Carbon(request('bought_at')) : null,
            'property_tag' => request('property_tag'),
            'serial_number' => request('serial_number'),
            'specifications' => request('specifications'),
            'department_id' => auth()->user()->department->id,
            'subdepartment_id' => auth()->user()->subdepartment != null ? auth()->user()->subdepartment->id : null
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        //
    }

    /**
     *
     */
    public function requestValidate(Request $request, Device $device = null)
    {
        request()->validate([
            'brand' => 'required',
            'seller' => 'nullable',
            'holder' => 'nullable',
            'pattern' => 'required',
            'category' => 'required',
            'ticket_number' => 'nullable',
            'bought_at' => 'nullable',
            'property_tag' => [
                'required',
                $device != null ? Rule::unique('devices', 'property_tag')->ignore($device->id) : 'unique:devices,property_tag'
            ],
            'serial_number' => 'nullable',
            'specifications' => 'nullable'
        ]);
    }
}
