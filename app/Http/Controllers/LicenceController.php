<?php

namespace App\Http\Controllers;

use App\Seller;
use App\Licence;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LicenceController extends Controller
{
    protected $timeInterval = [
        'daily' => ['addDays', 1],
        'weekly' => ['addWeeks', 1],
        'biweekly' => ['addWeeks', 2],
        'monthly' => ['addMonths', 1],
        'bimonthly' => ['addMonths', 2],
        'quarterly' => ['addMonths', 3],
        'semiannual' => ['addMonths', 6],
        'yearly' => ['addYears', 1],
        'biennial' => ['addYears', 2],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->wantsJson()) {
            $licences = new Licence;
            return $licences->search(request()->all());
        }
        return view('licences.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = new Seller;
        return view('licences.create')
            ->with(['sellers' => $sellers->search()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);

        $carbonMethod = $this->timeInterval[
            request('renewal_term')['value']
        ][0];

        $bought_at = new Carbon(request("bought_at"));

        Licence::create([
            'name' => request("name"),
            'notes' => request("notes"),
            'value' => request("value"),
            'bought_at' => new Carbon(request("bought_at")),
            'seller_id' => request('seller') != null ? request('seller')['id'] : null,
            'description' => request("description"),
            'renewal_term' => request("renewal_term")['value'],
            'due_date' => $bought_at->$carbonMethod(
                $this->timeInterval[
                    request("renewal_term")['value']
                ][1]
            ),
            'status' => Carbon::now(),
            'department_id' => auth()->user()->department_id,
            'subdepartment_id' => auth()->user()->subdepartment != null ? auth()->user()->subdepartment->id : null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function show(Licence $licence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function edit(Licence $licence)
    {
        $licence = Licence::whereId($licence->id)->with('seller')->first();
        $sellers = new Seller;

        return view('licences.edit')
            ->with([
                'licence' => $licence,
                'sellers' => $sellers->search()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licence $licence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licence $licence)
    {
        //
    }

    /**
     *
     */
    public function validateRequest(Request $request, Licence $licence = null)
    {
        request()->validate([
            "name" => 'required',
            "notes" => 'nullable',
            "value" => 'required',
            "seller" => 'nullable',
            "bought_at" => 'required',
            "description" => 'nullable',
            "renewal_term" => 'required',
        ]);
    }
}
