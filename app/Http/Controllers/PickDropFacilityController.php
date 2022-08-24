<?php

namespace App\Http\Controllers;

use App\Models\pick_drop_facility;
use Illuminate\Http\Request;
use App\Models\Car;
class PickDropFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities=pick_drop_facility::all();
        return view('facilitylist')->with(compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars=Car::all();
        return view('addpickupdropoff')->with(compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pick_drop_facility::create($request->all());
        return redirect()->route('facility.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pick_drop_facility  $pick_drop_facility
     * @return \Illuminate\Http\Response
     */
    public function show(pick_drop_facility $pick_drop_facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pick_drop_facility  $pick_drop_facility
     * @return \Illuminate\Http\Response
     */
    public function edit(pick_drop_facility $pick_drop_facility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pick_drop_facility  $pick_drop_facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pick_drop_facility $pick_drop_facility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pick_drop_facility  $pick_drop_facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(pick_drop_facility $pick_drop_facility)
    {
        //
    }
}
