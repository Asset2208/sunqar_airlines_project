<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Flights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Team;
use App\Models\Airline;
use App\Models\City;
use App\Models\Flight;

class AviaListsController extends Controller
{
    public $flights;
    public function index(Request $request){
        // $users = DB::table('users')
        // ->join('contacts', 'users.id', '=', 'contacts.user_id')
        // ->join('orders', 'users.id', '=', 'orders.user_id')
        // ->select('users.*', 'contacts.phone', 'orders.price')
        // ->get();

        // $flights = DB::table('flights')
        // ->join('cities', 'flights.city_from_id', '=', 'cities.id')
        // ->join('airlines', 'flights.airline_id', '=', 'airlines.id')
        // ->select('flights.*', 'cities.name', 'airlines.name')
        // ->get();
        // $city_from_req = City::where('name', $request->from_city)->get();
        // $city_to_req = City::where('name', $request->to_city)->get();
        // $flights = Flight::where('city_from_id', $city_from_req)
        // ->where('city_to_id', $city_to_req)->get();
        $city = City::where('name', $request->to_city)->first();
        $flights = DB::table('flights')
        ->join('cities AS cities_one', 'flights.city_from_id', '=', 'cities_one.id')
        ->join('cities AS cities_two', 'flights.city_to_id', '=', 'cities_two.id')
        ->join('airlines', 'flights.airline_id', '=', 'airlines.id')
        ->where('cities_one.name', $request->from_city)
        ->where('flights.flight_date', '>=', $request->date_to)
        ->where('flights.city_to_id', $city->id)
        ->get();

        $this->flights = $flights;
        
        // $flights = Flight::where('id', $cities->id)->get();


        return view('avia_list', ['flights'=>$this->flights]);
    }
}
