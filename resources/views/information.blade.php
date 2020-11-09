@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/information.css') }}">
<link rel="stylesheet" href="{{ url('css/home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

@section('content')
<div class="container contentblock">
    <div class="row">
        <div class="col-md-3 left-menu">
            <h1 class="title">Свяжитесь с нами</h1>

            <div class="support-block">
                <img src="{{ url('img/information/send-message.png') }}" width="24" height="24"><a href="/contacts/">Напишите нам</a>
            </div>
            <div class="support-block">
                <img src="{{ url('img/information/phone-icon.png') }}" width="24" height="24"><a href="#">8 727
                    727-27-27</a>
                <p>Номер Контакт Центра</p>
            </div>
            <div class="social-content">
                <p>Смотрите наши видео:</p>
                <div class="youtube">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/BYwMVEr1dEA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p>Задайте нам вопрос в социальных сетях</p>
                <div class="sc-icons">
                    <a href="#"  class="fb"></a>
                    <a href="#"  class="insta"></a>
                </div>
                
            </div>
        </div>
        <div class="col-md-9 rightcontent">
            <h2 class="title">FAQ</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="faqblock">
                        <a href="#" class="arrowlink">
                            Covid-19 </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faqblock">
                        <a href="#" class="arrowlink">
                            Покупка билета (Возврат/перебронирование/ваучер) </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="faqblock">
                        <a href="#" class="arrowlink">
                            Дополнительные услуги </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faqblock">
                        <a href="#" class="arrowlink">
                            Регистрация </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="faqblock">
                        <a href="#" class="arrowlink">
                            Путешествие с детьми </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection