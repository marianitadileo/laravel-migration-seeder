<?php

namespace App\Http\Controllers;

use App\Models\Trains;
use App\Http\Requests\StoreTrainsRequest;
use App\Http\Requests\UpdateTrainsRequest;

class TrainsController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTrainsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trains  $trains
     * @return \Illuminate\Http\Response
     */
    public function show(Trains $trains)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trains  $trains
     * @return \Illuminate\Http\Response
     */
    public function edit(Trains $trains)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrainsRequest  $request
     * @param  \App\Models\Trains  $trains
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainsRequest $request, Trains $trains)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trains  $trains
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trains $trains)
    {
        //
    }
}
