<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorealarmRequest;
use App\Http\Requests\UpdatealarmRequest;
use App\Models\alarm;
use Auth;
use Request;

class AlarmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$user = Auth::user();

		$alarmset = alarm::where("user_id", '=', $user->id)->get();

        return view('alarms')->with('data', $alarmset);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        alarm::factory()->times(1)->create();
		return to_route('alarms');
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
    public function edit($id)
    {
		alarm::where("id", '=', $id)->delete();

		return to_route('alarms');
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

    }
}
