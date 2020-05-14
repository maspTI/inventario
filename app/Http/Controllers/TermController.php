<?php

namespace App\Http\Controllers;

use App\User;
use App\Device;
use Carbon\Carbon;
use App\Department;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     *
     */
    public function refund(Device $device)
    {
        $user = new User;
        return view('terms.refund')
            ->with([
                'device' => $device,
                'user' => User::whereId(decrypt(request('user')))->first(),
                'manager' => $user->manager(17), // RH
                'date' => Carbon::now()->locale('pt_br')
            ]);
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
