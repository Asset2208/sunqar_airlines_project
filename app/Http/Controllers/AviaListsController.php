<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Flights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Team;
use App\Models\Airline;
use App\Models\City;
use App\Models\ClassSeat;
use App\Models\Flight;
use DateTime;

class AviaListsController extends Controller
{
    public $flights;
    public $classes;

    public function index(Request $request){

        $date_now = new DateTime();



        $flights = Flight::whereHas('city_from', function ($query) use($request) {
            $city_from_req = $request->from_city;
            return $query->where('name', '=', $city_from_req);
        })->whereHas('city_to', function ($query) use($request){
            $city_to_req = $request->to_city;
            return $query->where('name', '=', $city_to_req);
        })->with('airline')
        ->where('flight_date', '=', $request->date_to)->get();

        $this->classes = ClassSeat::all();

        if ($request->filled('date_back')) {
            $flights_back = Flight::whereHas('city_from', function ($query) use($request) {
                $city_to_req = $request->to_city;
                return $query->where('name', '=', $city_to_req);
            })->whereHas('city_to', function ($query) use($request){
                $city_from_req = $request->from_city; $request->to_city;
                return $query->where('name', '=', $city_from_req);
            })->with('airline')
            ->where('flight_date', '=', $request->date_back)->get();

            return view('avia_list', ['flights'=>$flights, 'flights_back'=>$flights_back, 'classseats'=>$this->classes]);
        }

        


        return view('avia_list', ['flights'=>$flights, 'classseats'=>$this->classes]);
    }
}
