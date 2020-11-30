@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/avia_list.css') }}">
@endsection

@section('content')
<section class="avia-list">
    <div class="container">
        <div class="avia-list-header">
            <p class="from">
                <span class="subtitle">Откуда:</span>
                <span>Шымкент</span>
            </p>
            <p class="distance">
                1200км
            </p>
            <p class="to">
                <span class="subtitle">Куда:</span>
                <span>Алматы</span>
            </p>
        </div>
    </div>
</section>
<section class="avia-list-result">
    {{ $flights }}
    @foreach($flights as $flight)
        {{-- <div> {{ $flight->name }} </div> --}}
        {{-- <div>
            {{ $flight- }}
        </div> --}}
        {{-- <div>
            {{ $flight->departure_hour }}
        </div>
        <div>
            {{ $flight->city_from_id }}
        </div>
        <div>
            {{ $flight->city_to_id }}
        </div> --}}
        {{-- <div>{{ $flight }}</div> --}}
    {{-- <div class="flight" style="background: url(" {{ url('img/avia_list/avia-bg.jpg') }}")">
        <div class="flight-header">
            <p class="from">
                <span class="subtitle">Откуда:</span>
                <span>{{ $flight->$city_from->name}}</span>
            </p>

            <p class="to">
                <span class="subtitle">Куда:</span>
                <span>{{ $flight->$city_to->name }}</span>
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
            Купить
        </div>
        <div class="flight-info">
            <img src="{{ $flight->airline->airline_photo }}" alt="" width="100px">
        </div>
    </div> --}}
    @endforeach
</section>
@endsection