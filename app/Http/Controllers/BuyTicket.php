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

        $ticket = new Ticket;
        $ticket->flight_id = $flightId;
        $ticket->user_id = $user->id;
        $ticket->class_id = $classId;
        $ticket->baggage = $baggage;

        $ticket->save();


        return redirect ('user/tickets');
    }
}
