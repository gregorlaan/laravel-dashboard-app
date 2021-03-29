<?php

namespace App\Http\Controllers;

use App\Models\Reading;
use App\Models\Reader;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class ReadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readings = Reading::all();
        return view('readings.index', compact('readings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $readers = Reader::all();
        return view('readings.create', compact('readers'));
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
            'reader' => 'required',
        ]);


        $reader = Reader::find($data['reader']);
        $reader->readings()->create($data);

        return redirect(route('readings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function show(Reading $reading)
    {
        return view('readings.show', compact('reading'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function edit(Reading $reading)
    {
        return view('readings.edit', compact('reading'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reading  $readings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reading $reading)
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
     * @param  \App\Models\Reading  $readings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reading $readings)
    {
        //
    }
}
