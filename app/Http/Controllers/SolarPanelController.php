<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storesolar_panelRequest;
use App\Http\Requests\Updatesolar_panelRequest;
use App\Models\solar_panel;
use App\Models\alarm;
use Auth;
use Storage;
use Request;

class SolarPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$user = Auth::user();

		$jsonstring = Storage::disk('local')->get($user->id.'.json');
		$json = json_decode($jsonstring, true);

        return view('dashboard')->with('data', $json)->with('input', $jsonstring);
    }

	public function settings()
    {
        return view('settings');
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
        // ADD ONE DAY OF DATA TO THE JSON FILE
		$user = Auth::user();
		$jsonstring = Storage::disk('local')->get($user->id.'.json');
		$json = json_decode($jsonstring, true);

		// add last days to historical

		/*
			"today_gen": 40, ->add to monthly->generation->currentmonth
			"sent_to_grid": 3, -> gone
			"battery_charge": 40, ->gone
			"current_gen": 60, ->gone
			"yesterday_gen": 400, -> pull from monthly gen day before
			"inverter_temp": 50, ->gone
			"current_usage": 50, ->gone
			"today_usage": 200, ->add to monthly usage month
		*/

		array_push($json["monthly"]["generation"]["april"], $json["today_gen"]);
		array_push($json["monthly"]["usage"]["april"], $json["today_usage"]);

		$json["today_gen"] = random_int(40, 500);
		$json["sent_to_grid"] = random_int(0, 40);
		$json["battery_charge"] = random_int(0, 100);
		$json["current_gen"] = random_int(20, 80);
		$json["yesterday_gen"] = $json["monthly"]["generation"]["april"][count($json["monthly"]["generation"]["april"])-2]; //second last
		$json["inverter_temp"] = random_int(20, 90); //if over 75 create alarm?
		$json["current_usage"] = random_int(20,100);
		$json["today_usage"] = random_int(100,300);

		$json["today_hourly"]["generation"] = [];
		$json["today_hourly"]["usage"] = [];
		for ($i=0; $i < random_int(5, 24); $i++) { 
			array_push($json["today_hourly"]["generation"], random_int(10,50));
			array_push($json["today_hourly"]["usage"], random_int(10,50));
		}

		$data = json_encode($json);
		Storage::disk('local')->put($user->id.'.json', $data);

		return to_route('dashboard');
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
