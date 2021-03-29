<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Reading;

class DashboardController extends Controller
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $totalDailyConsumption = Reading::whereDay('created_at', date('d'))->get()->sum('value');
        return view('dashboard', compact('totalDailyConsumption'));
    }
}
