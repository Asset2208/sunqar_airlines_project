<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Tickets;
use App\Models\Ticket;
use Illuminate\Http\Request;

class UserTickets extends Controller
{
    public function index() {
        $user = auth()->user();

        $tickets = Ticket::query()->where('user_id', '=', $user->id)->get();


        return view('user_tickets', ['tickets'=>$tickets]);
    }
}
