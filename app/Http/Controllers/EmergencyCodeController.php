<?php

namespace App\Http\Controllers;

use App\EmergencyCode;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmergencyCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('emergencycodes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmergencyCode  $emergencyCode
     * @return Response
     */
    public function show(EmergencyCode $emergencyCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmergencyCode  $emergencyCode
     * @return Response
     */
    public function edit(EmergencyCode $emergencyCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmergencyCode  $emergencyCode
     * @return Response
     */
    public function update(Request $request, EmergencyCode $emergencyCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmergencyCode  $emergencyCode
     * @return Response
     */
    public function destroy(EmergencyCode $emergencyCode)
    {
        //
    }
}
