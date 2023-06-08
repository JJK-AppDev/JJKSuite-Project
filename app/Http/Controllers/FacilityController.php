<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use App\Models\Type;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $facilities = Facility::all();
      return view('facility.index', compact('facilities'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $view = view('facilities.create')->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $facilities = Facility::create($request->all());
        return response()->json([
            'message' => 'success', 'Facility' . $facilities->name . ' created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facilities
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facilities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facilities
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facilities)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facilities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facilities)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facilities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facilities)
    {
      //
    }
}
