@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/avia_list.css') }}">
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
@endsection

@section('content')
<section class="avia-list-result" style="margin-top: 100px;">
    <div id="weatherFrom"></div>
    <div id="weatherTo"></div>
    @foreach($flights as $flight)
    <div class="flight" style="background: url('img/avia_list/avia-bg.jpg');" >
        <div class="flight-header">
            <p class="from">
                <span class="subtitle">Откуда:</span>
                <span id="from_city">{{ $flight->city_from->name}}</span>
            </p>

            <p class="to">
                <span class="subtitle">Куда:</span>
                <span id="to_city">{{ $flight->city_to->name }}</span>
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
            <form id="myform" method="get" action="/ticket-details">
                <select name="class" id="" required>
                    @foreach ($classseats as $class)
                        <option value={{ $class->id }}>{{ $class->name }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="flight_id" value="{{ $flight->id }}">
                <input type="number" placeholder="Кол-во багажа" name="baggage" min="1" max="5" required>
                <button type="submit">Купить</button>
            </form>
        </div>
        <div class="flight-info">
            <img src="{{ $flight->airline->airline_photo }}" alt="" width="100px">
        </div>
    </div> 
    @endforeach
    
    <script type="text/javascript">
        window.onload = function() {
            var to_city = document.getElementById('to_city').textContent;
            var from_city = document.getElementById('from_city').textContent;
            var key = 'bb9109c347eed1a26479c2f6b36d3eeb';

            $.ajax({
                    url: 'http://api.openweathermap.org/data/2.5/weather',
                    dataType: 'json',
                    type: 'GET',
                    data: {q: to_city, appid: key, units: 'metric'},

                    success: function (data) {
                        var wf = '';
                        $.each(data.weather, function (index, val) {
                            wf += '<p><b>' + data.name + "</b><img src=http://openweathermap.org/img/wn/" + val.icon + "@2x.png" + "></p>"+
                            data.main.temp + '&deg;C' + ' | ' + val.main + ", " + val.description
                        })
                        $("#weatherTo").html(wf);
                    }
                });
            $.ajax({
                url: 'http://api.openweathermap.org/data/2.5/weather',
                dataType: 'json',
                type: 'GET',
                data: {q: from_city, appid: key, units: 'metric'},

                success: function (data) {
                    var wf = '';
                    $.each(data.weather, function (index, val) {
                        wf += '<p><b>' + data.name + "</b><img src=http://openweathermap.org/img/wn/" + val.icon + "@2x.png" + "></p>"+
                        data.main.temp + '&deg;C' + ' | ' + val.main + ", " + val.description
                    })
                    $("#weatherFrom").html(wf);
                }
            });
    }
    </script>
        
    @if (isset($flights_back))
        <hr>
        <h2 class="back">Назад</h2>
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
            <form id="myform" method="get" action="/ticket-details">
                <select name="class" id="" required>
                    @foreach ($classseats as $class)
                        <option value={{ $class->id }}>{{ $class->name }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="flight_id" value="{{ $flight->id }}">
                <input type="number" name="baggage" min="1" max="5" required>
                <button type="submit">Купить</button>
            </form>
        </div>
            <div class="flight-info">
                <img src="{{ $flight->airline->airline_photo }}" alt="" width="100px">
            </div>
        </div>
        @endforeach
    @endif
</section>
@endsection