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
                                            Путешествие с детьми
                                        </h2>
                                        <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between activestate">
                                                    <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Как добавить ребенка к моей брони?</a>
                                                </div>
                                                <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                                    <div class="card-body pa-15">
                                                        Детям билеты отдельно от родителей приобретаются только через Контакт Центр Sunqar Airlines или тур агенства.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Нужно ли выписывать билет на младенца?</a>
                                                </div>
                                                <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Дети до 2 лет принимаются к перевозке бесплатно без предоставления отдельного места, но, по требованиям безопасности полетов, на каждого младенца должен быть оформлен отдельный билет.</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Как оформить билет только на ребенка? Есть ли у вас услуга "несопровождаемый ребенок"?</a>
                                                </div>
                                                <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Оформление билета только на ребенка, возможно по обращению в Контакт-центр Sunqar Airlines по телефону 8 727 727-27-27, либо в туристическое агентство. Sunqar Airlines предлагает платную услугу по перевозке несопровождаемого ребенка, которая может быть оформлена во время бронирования авиабилета или после так же через Контакт центр или агентство, но не позднее, чем за 24 часа до вылета.</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Какие документы необходимы при путешествии с детьми?</a>
                                                </div>
                                                <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Дети младше 16 лет принимаются к перевозке на территории Республики Казахстан при предоставлении оригинала свидетельства о рождении. Если ребенок путешествует в сопровождении взрослого пассажира, который не является одним из его родителей, на стойке регистрации необходимо предоставить оригинал доверенности заверенной нотариально от родителя на перевозку ребенка.</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">При онлайн регистрации билетов детей, система не выдала онлайн посадочные для детей, что делать?</a>
                                                </div>
                                                <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Пассажирам с детьми/младенцами доступна услуга онлайн регистрации на сайте, однако для получения посадочных талонов на детей, необходимо обратиться на стойку регистрации в аэропорту не позднее, чем за 60 минут до вылета, для проверки всех необходимых документов для перевозки.</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6i" aria-expanded="false">Как перевозятся детские коляски? Считается ли это багажом? </a>
                                                </div>
                                                <div id="collapse_6i" class="collapse" data-parent="#accordion_2">
                                                    <div class="card-body pa-15">Сверх установленной нормы бесплатного провоза ручной клади, пассажир может бесплатно провозить одну складную детскую коляску, если ее размер в свернутом состоянии, включая все ее составляющие, соответствуют габаритам ручной клади (56x23x36 см). Если коляска в свернутом состоянии превышает габариты ручной клади, она принимается к перевозке в качестве зарегистрированного багажа без дополнительной платы. Коляска считается багажом если перевозится взрослым пассажиром без ребенка.</div>
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