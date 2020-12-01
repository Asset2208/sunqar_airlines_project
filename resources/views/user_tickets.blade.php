@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/user_tickets.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

@section('content')

<div class="container user-tickets-list">
    <div class="alert alert-success" role="alert">
        Мои билеты
    </div>

    <div class="tickets row">
        @foreach ($tickets as $ticket)
            <div class="card col-6 my-2">
                <div class="card-header">
                    Номер билета №{{ $ticket->id }}
                </div>
                <div class="card-body">
                <h5 class="card-title">
                    {{ $ticket->flight->city_from->name }} →
                    {{ $ticket->flight->city_to->name }}
                </h5>
                <p class="card-text">
                    <span>Дата: </span>
                    {{ $ticket->flight->flight_date }}
                </p>
                <p class="card-text">
                    <span>Время вылета: </span>
                    {{ $ticket->flight->flight_time }}
                </p>
                <form action="/generate-pdf" method="GET">
                    <input type="hidden" name="ticket_id" value={{ $ticket->id }}>

                    <button class="btn btn-primary"> 
                        Скачать билет
                    </button>
                </form>
                </div>
            </div>          
        @endforeach
    </div>

</div>
@endsection
