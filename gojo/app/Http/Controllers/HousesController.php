<?php

namespace App\Http\Controllers;

use App\Models\Houses;
use App\Http\Requests\StoreHousesRequest;
use App\Http\Requests\UpdateHousesRequest;
use Inertia\Inertia;

class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Houses::query();

        return Inertia::render('houses',[
            'data' =>$data
        ]);
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
     * @param  \App\Http\Requests\StoreHousesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHousesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Houses  $houses
     * @return \Illuminate\Http\Response
     */
    public function show(Houses $houses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Houses  $houses
     * @return \Illuminate\Http\Response
     */
    public function edit(Houses $houses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHousesRequest  $request
     * @param  \App\Models\Houses  $houses
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHousesRequest $request, Houses $houses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Houses  $houses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Houses $houses)
    {
        //
    }
}
