<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class BuyTicket extends Controller
{
    public function index(Request $req)
    {
        $user = auth()->user();
        $classId = $req->class;
        $flightId = $req->flight_id;
        $baggage = $req->baggage;
        $first_name = $req->first_name;
        $last_name = $req->last_name;
        $iin = $req->iin;
        $passport_number = $req->passport_number;
        $country = $req->country;


        $ticket = new Ticket;
        $ticket->flight_id = $flightId;
        $ticket->user_id = $user->id;
        $ticket->class_id = $classId;
        $ticket->baggage = $baggage;
        $ticket->passenger_name = $first_name;
        $ticket->passenger_suname = $last_name;
        $ticket->passenger_iin = $iin;
        $ticket->passenger_passport = $passport_number;
        $ticket->passenger_country = $country;

        $ticket->save();


        return redirect ('user/tickets');
    }
}
