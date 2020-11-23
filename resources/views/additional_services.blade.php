@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/information.css') }}">
<link rel="stylesheet" href="{{ url('css/home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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
                    <a href="#" class="fb"></a>
                    <a href="#" class="insta"></a>
                </div>

            </div>
        </div>
        <div class="col-md-9 rightcontent">
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="container mt-sm-60 mt-30">
                            <div class="hk-row">
                                <div class="col">
                                    <div class="card card-lg">
                                        <h2 class="card-header border-bottom-0">
                                            Дополнительные услуги
                                        </h2>
                                        <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between activestate">
                                                    <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Какие параметры ручной клади допускаются?</a>
                                                </div>
                                                <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                                    <div class="card-body pa-15">
                                                        <p>Параметры бесплатного провоза ручной клади не должны превышать 56Х23х36  см, вес не должен превышать 5 кг.</p>

                                                        <p>Если вам необходима перевозка ручной клади весом больше, вы можете заранее приобрести услугу Ручная кладь Плюс (общий вес не должен превышать 10 кг , размеры не должны превышать 56x23x36 см) или оплатить регистрируемый багаж не позднее чем за 2 часа до вылета.</p>

                                                        </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Какие параметры багажа допускаются?</a>
                                                </div>
                                                <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Размеры багажа не должны превышать 158 см в трех измерениях, вес одной сумки не должен превышать 32 кг.</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">После того как я уже купил билет могу ли я отдельно докупить багаж, питание и другие дополнительные услуги? </a>
                                                </div>
                                                <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Да, дополнительные услуги можно приобрести как во время, так и после покупки билета не позднее 2 часов до вылета через раздел "Моя бронь" в приложении Sunqar Airlines, либо через раздел "Багаж, место +" на главной странице sunqar-airlines.com или через Контакт Центр.</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Если билет был оформлен через турагентство, можно ли докупить багаж, питание и другие дополнительные услуги на сайте sunqar-airlines.com? </a>
                                                </div>
                                                <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Да, вне зависимости от места приобретения билета вы можете приобрести дополнительные услуги не позднее 2 часов до вылета через раздел "Багаж, место +" на сайте sunqar-airlines.com или через мобильное приложения Sunqar Airlines через раздел "Моя бронь".</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">Существуют ли дополнительные нормы багажа при перевозке младенца?</a>
                                                </div>
                                                <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Для пассажиров, путешествующих с младенцем, нормы дополнительного багажа отсутствуют.</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6i" aria-expanded="false">Что делать, если по приезде в аэропорт у меня оказалось больше багажа, чем включено в стоимость авиабилета?</a>
                                                </div>
                                                <div id="collapse_6i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Если в пункте отправления пассажир предъявил багаж ранее не оплаченный или предъявил к перевозке багаж, весом больше, чем было предварительно оплачено, пассажир обязан оплатить в аэропорту стоимость перевозки сверхнормативного багажа по тарифу за каждый килограмм в аэропорту. Стоимость перевозки багажа в аэропорту в несколько раз дороже, чем на сайте авиакомпании и тарифицируются за каждый килограмм.</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>

        </div>
    </div>
</div>
@endsection