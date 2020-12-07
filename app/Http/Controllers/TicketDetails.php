<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassSeat;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;

class TicketDetails extends Controller
{
    public function index(Request $request){

        $flight = Flight::find($request->flight_id);
        $baggage = $request->baggage;
        $classId = $request->class;

        $class = ClassSeat::find($classId);

        return view('ticket-details', ['flight'=>$flight, 'classseat'=>$class, 'baggage'=>$baggage]);
    }
}
