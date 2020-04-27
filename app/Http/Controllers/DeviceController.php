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

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        request()->validate([
            'brand' => 'required',
            'seller' => 'required',
            'holder' => 'nullable',
            'pattern' => 'required',
            'category' => 'required',
            'ticket_number' => 'required',
            'bought_at' => 'required',
            'property_tag' => 'required|unique:devices,property_tag',
            'serial_number' => 'nullable|unique:devices,serial_number',
            'specs' => 'nullable'
        ]);

        Device::Create([
            'brand_id' => request('brand')['id'],
            'seller_id' => request('seller')['id'],
            'holder_id' => request('holder')['id'],
            'pattern_id' => request('pattern')['id'],
            'category_id' => request('category')['id'],
            'ticket_number' => request('ticket_number'),
            'bought_at' => new Carbon(request('bought_at')),
            'property_tag' => request('property_tag'),
            'serial_number' => request('serial_number'),
            'specifications' => request('specs'),
            'department_id' => 8
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
        //
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
        //
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
}
