<?php

namespace App\Http\Controllers;

use App\Models\Readings;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class ReadingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readings = Readings::all();
        return view('readings.index', compact('readings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('readings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'value' => 'required',
        ]);

        Readings::create($data);

        return redirect(route('readings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Readings  $reading
     * @return \Illuminate\Http\Response
     */
    public function show(Readings $reading)
    {
        return view('readings.show', compact('reading'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Readings  $reading
     * @return \Illuminate\Http\Response
     */
    public function edit(Readings $reading)
    {
        return view('readings.edit', compact('reading'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Readings  $readings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Readings $reading)
    {
        $data = request()->validate([
            'value' => 'required',
        ]);

        $reading->update($data);

        return redirect(route('readings.show', $reading->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Readings  $readings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Readings $readings)
    {
        //
    }
}
