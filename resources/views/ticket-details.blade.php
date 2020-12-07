@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/user_tickets.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{ url('css/avia_list.css') }}">
@endsection

@section('content')

<div class="container">

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Ваш рейс</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $flight->city_from->name}}</h6>
            <small class="text-muted">Город вылета</small>
          </div>
          <!-- <span class="text-muted">$12</span> -->
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $flight->city_to->name }}</h6>
            <small class="text-muted">Город прилета</small>
          </div>
          <!-- <span class="text-muted">$8</span> -->
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Дата вылета</h6>
            <small class="text-muted">гггг-мм-дд</small>
          </div>
          <span class="text-muted">{{ $flight->flight_date}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Время вылета</h6>
            <small class="text-muted">чч-мм-сс</small>
          </div>
          <span class="text-muted">{{ $flight->flight_time}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $classseat->name}}</h6>
            <small class="text-muted">Класс</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Количество багажа</h6>
            <small class="text-muted">Класс</small>
          </div>
          <span class="text-muted">{{ $baggage }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Сумма (KZT)</span>
          <strong>20000</strong>
        </li>
      </ul>

    </div> 
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Данные пассажира</h4>
      <form class="needs-validation" method="post" action="/buy_ticket">
      {{csrf_field()}}
      <input type="hidden" name="baggage" value="{{ $baggage }}">
      <input type="hidden" name="flight_id" value="{{ $flight->id}}">
      <input type="hidden" name="class" value="{{ $classseat->id }}">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Имя</label>
            <input type="text" class="form-control" id="firstName" placeholder="" required="required" name="first_name">
            <div class="invalid-feedback">
                Имя обязательно нужно ввести
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Фамилия</label>
            <input type="text" class="form-control" id="lastName" placeholder="" required="required" name="last_name">
            <div class="invalid-feedback">
              Фамилию обязательно нужно ввести
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">ИИН</label>
          <div class="input-group">
            <input type="text" class="form-control" id="username" placeholder="ИИН" required="required" name="iin">
            <div class="invalid-feedback" style="width: 100%;">
              ИИН обязательно нужно ввести
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Данные паспорта(На внутренние рейсы номер удостоверения)</label>
          <input type="text" class="form-control" id="address" placeholder="12312314" required="required" name="passport_number">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Гражданство</label>
            <select class="custom-select d-block w-100" id="country" required="required" name="country">
              <option value="">Choose...</option>
              <option value="KAZ">Казахстан</option>
              <option value="RUS">Россия</option>
              <option value="UZB">Узбекистан</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
        </div>
        <hr class="mb-4">


        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="required">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="required">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="required">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="required">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2020 Sunqar Airlines</p>
  </footer>
</div>
@endsection
