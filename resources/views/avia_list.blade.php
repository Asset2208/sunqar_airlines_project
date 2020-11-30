@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/avia_list.css') }}">
@endsection

@section('content')
<section class="avia-list-result">
    @foreach($flights as $flight)
    <div class="flight" style="background: url('img/avia_list/avia-bg.jpg');" >
        <div class="flight-header">
            <p class="from">
                <span class="subtitle">Откуда:</span>
                <span>{{ $flight->city_from->name}}</span>
            </p>

            <p class="to">
                <span class="subtitle">Куда:</span>
                <span>{{ $flight->city_to->name }}</span>
            </p>
        </div>
        <div class="flight-time">
            <p>
                Дата: {{ $flight->flight_date}}
            </p>
            <p>
                Время: {{ $flight->flight_time}}
            </p>
        </div>
        <div class="flight-price">
            <p>От 5900тг</p>
        </div>
        <div class="flight-detail">
            <a onclick="document.getElementById('myform').submit();">Купить</a>
        </div>
        <div class="flight-info">
            <img src="{{ $flight->airline->airline_photo }}" alt="" width="100px">
        </div>
        <form id="myform" method="post" action="/buy_ticket">
            <input type="hidden" name="flight_id" value="{{ $flight->id }}">
        </form>
    </div> 
    @endforeach
    
    @if (isset($flights_back))
        <hr>
        <h1>Назад</h1>
        @foreach($flights_back as $flight)
        <div class="flight" style="background: url('img/avia_list/avia-bg.jpg');" >
            <div class="flight-header">
                <p class="from">
                    <span class="subtitle">Откуда:</span>
                    <span>{{ $flight->city_from->name}}</span>
                </p>

                <p class="to">
                    <span class="subtitle">Куда:</span>
                    <span>{{ $flight->city_to->name }}</span>
                </p>
            </div>
            <div class="flight-time">
                <p>
                    Дата: {{ $flight->flight_date}}
                </p>
                <p>
                    Время: {{ $flight->flight_time}}
                </p>
            </div>
            <div class="flight-price">
                <p>От 5900тг</p>
            </div>
            <div class="flight-detail">
                <a href="/contacts">Купить</a>
            </div>
            <div class="flight-info">
                <img src="{{ $flight->airline->airline_photo }}" alt="" width="100px">
            </div>
        </div>
        @endforeach
    @endif
</section>
@endsection