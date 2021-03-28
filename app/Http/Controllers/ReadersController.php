<?php

namespace App\Http\Controllers;

use App\Models\Readers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class ReadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readers = Readers::all();
        return view('readers.index', compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('readers.create');
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
            'name' => 'required',
            'location' => 'required',
        ]);

        Readers::create($data);

        return redirect(route('readers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Readers  $reader
     * @return \Illuminate\Http\Response
     */
    public function show(Readers $reader)
    {
        return view('readers.show', compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Readers  $reader
     * @return \Illuminate\Http\Response
     */
    public function edit(Readers $reader)
    {
        return view('readers.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Readers  $readers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Readers $reader)
    {
        $data = request()->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        $reader->update($data);

        return redirect(route('readers.show', $reader->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Readers  $readers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Readers $readers)
    {
        //
    }
}
