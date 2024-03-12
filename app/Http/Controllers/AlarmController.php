<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorealarmRequest;
use App\Http\Requests\UpdatealarmRequest;
use App\Models\alarm;

class AlarmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorealarmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(alarm $alarm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alarm $alarm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatealarmRequest $request, alarm $alarm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alarm $alarm)
    {
        //
    }
}
