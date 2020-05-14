<?php

namespace App\Http\Controllers;

use App\Device;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     *
     */
    public function refund(Device $device)
    {
    }

    /**
     *
     */
    public function delivery(Device $device)
    {
        return view('terms.delivery')
            ->with([
                'device' => $device,
                'date' => Carbon::now()->locale('pt_br')
            ]);
    }
}
