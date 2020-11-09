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
<div class="flight" style="background: url("{{ url('img/avia_list/avia-bg.jpg') }}")">
            <div class="flight-header">
                <p class="from">
                    <span class="subtitle">Откуда:</span>
                    <span>Шымкент</span>
                </p>

                <p class="to">
                    <span class="subtitle">Куда:</span>
                    <span>Алматы</span>
                </p>
            </div>
            <div class="flight-time">
                <p>
                    Дата: 16.10.2020
                </p>
                <p>
                    Время: 16:30
                </p>
            </div>
            <div class="flight-price">
                <p>От 5900тг</p>
            </div>
            <div class="flight-detail">
                Купить
            </div>
            <div class="flight-info">
                <img src="img/avia_list/air-astana.png" alt="" width="100px">
            </div>
        </div>
        <div class="flight">
            <div class="flight-header">
                <p class="from">
                    <span class="subtitle">Откуда:</span>
                    <span>Шымкент</span>
                </p>

                <p class="to">
                    <span class="subtitle">Куда:</span>
                    <span>Алматы</span>
                </p>
            </div>
            <div class="flight-time">
                <p>
                    Дата: 23.10.2020
                </p>
                <p>
                    Время: 13: 30
                </p>
            </div>
            <div class="flight-price">
                <p>От 9020тг</p>
            </div>
            <div class="flight-detail">
                Купить
            </div>
            <div class="flight-info">
                <img src="img/avia_list/flyarystan.png" alt="" width="100px">
            </div>
        </div>
        <div class="flight">
            <div class="flight-header">
                <p class="from">
                    <span class="subtitle">Откуда:</span>
                    <span>Шымкент</span>
                </p>

                <p class="to">
                    <span class="subtitle">Куда:</span>
                    <span>Алматы</span>
                </p>
            </div>
            <div class="flight-time">
                <p>
                    Дата: 30.10.2020
                </p>
                <p>
                    Время: 16:30
                </p>
            </div>
            <div class="flight-price">
                <p>От 9200тг</p>
            </div>
            <div class="flight-detail">
                Купить
            </div>
            <div class="flight-info">
                <img src="img/avia_list/air-astana.png" alt="" width="100px">
            </div>
        </div>
</section>
@endsection