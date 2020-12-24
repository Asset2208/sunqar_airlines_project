@extends('layouts.application')

@section('styles')

<link rel="stylesheet" href="{{ url('css/admin.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
    
@endsection

@section('content')

<main class="container admin">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded mr-2" alt="...">
          <strong class="mr-auto">Bootstrap</strong>
          <small class="text-muted">just now</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          See? Just like this.
        </div>
      </div>
    <div class="row d-flex align-items-center">
        <h1 class="col-5">Админ панель</h1>
        <div class="col-7 text-right">
            <img src="https://www.flaticon.com/svg/static/icons/svg/2206/2206368.svg" alt="" width="100px">
        </div>
    </div>

    <h3 class="my-4 ml-1">Навигация</h3>
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            Страны
          </div>
          <div class="card-body">
            <a href="/admin/country" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            Города
          </div>
          <div class="card-body">
            <a href="/admin/cities" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      <div class="col-6 mt-3">
        <div class="card">
          <div class="card-header">
            Посты
          </div>
          <div class="card-body">
            <a href="/admin/post" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      <div class="col-6 mt-3">
        <div class="card">
          <div class="card-header">
            Авиалинии
          </div>
          <div class="card-body">
            <a href="/admin/airline" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      <div class="col-6 mt-3">
        <div class="card">
          <div class="card-header">
            Авиаперелеты
          </div>
          <div class="card-body">
            <a href="/admin/flight" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      <div class="col-6 mt-3">
        <div class="card">
          <div class="card-header">
            Купленные билеты
          </div>
          <div class="card-body">
            <a href="/admin/ticket" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      <div class="col-6 mt-3">
        <div class="card">
          <div class="card-header">
            Аэропорты
          </div>
          <div class="card-body">
            <a href="/admin/airports" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      <div class="col-6 mt-3">
        <div class="card">
          <div class="card-header">
            Виды классов
          </div>
          <div class="card-body">
            <a href="/admin/class-seats" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
      <div class="col-6 mt-3">
        <div class="card">
          <div class="card-header">
            Вопросы от пользователей
          </div>
          <div class="card-body">
            <a href="/admin/contact-request" class="btn btn-primary">Смотреть</a>
          </div>
        </div>
      </div>
    </div>
</main>
    
@endsection