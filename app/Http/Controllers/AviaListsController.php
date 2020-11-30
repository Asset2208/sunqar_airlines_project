<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Team;
use App\Models\Airline;
use App\Models\City;
use App\Models\Flight;

class AviaListsController extends Controller
{
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
        $city_from_req = City::find('name', '=', $request->from_city)->get();
        $city_to_req = City::find('name', '=', $request->to_city)->get();
        $flights = Flight::find('city_from_id', $city_from_req->id)
        ->find('city_to_id', $city_to_req->id)->get();
        return view('avia_list', ['flights' => $flights]);
    }
}
