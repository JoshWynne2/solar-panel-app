<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storesolar_panelRequest;
use App\Http\Requests\Updatesolar_panelRequest;
use App\Models\solar_panel;
use App\Models\alarm;
use Auth;
use Storage;

class SolarPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$user = Auth::user();

		$json = Storage::disk('local')->get($user->id.'.json');
		$json = json_decode($json, true);

        return view('dashboard')->with('data', $json);
    }

	public function alarms()
    {
		$user = Auth::user();

		$alarmset = alarm::where("user_id", '=', $user->id)->get();

        return view('alarms')->with('data', $alarmset);
    }


	public function markalarm()
    {
		alarm::factory()->times(1)->create();

		return to_route('alarms');
    }


	public function settings()
    {
		$json = Storage::disk('local')->get('testdata.json');
		$json = json_decode($json, true);

        return view('settings')->with('data', $json);

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
    public function store(Storesolar_panelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(solar_panel $solar_panel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(solar_panel $solar_panel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatesolar_panelRequest $request, solar_panel $solar_panel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(solar_panel $solar_panel)
    {
        //
    }
}
