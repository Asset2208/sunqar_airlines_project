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
                                            Покупка билета (Возврат/перебронирование/ваучер)
                                            </h3>
                                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between activestate">
                                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Могу ли оформить авиабилет на удостоверение личности?</a>
                                                    </div>
                                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                                        <div class="card-body pa-15">
                                                            <p>Документами, удостоверяющими личность, действительными* для перевозки на территории Казахстана являются:</p>
                                                            <ul>
                                                                <li>паспорт (для граждан Республики Казахстан - с указанием ИИН);</li>
                                                                <li>удостоверение личности (для граждан Республики Казахстан - с указанием ИИН);</li>
                                                                <li>вид на жительство иностранца в Республике Казахстан (с указанием ИИН);</li>
                                                                <li>удостоверение лица без гражданства;</li>
                                                                <li>удостоверение беженца;</li>
                                                                <li>свидетельство о рождении (для граждан РК, не достигших 16-летнего возраста).</li>
                                                            </ul>
                                                            <p>* Необходимо предъявлять оригинал документа.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Как узнать код подтверждения бронирования?</a>
                                                    </div>
                                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                                        <div class="card-body pa-15">Вы получите код подтверждения после успешного завершения бронирования. Он будет указан на странице подтверждения, а также в маршрутной квитанции, отправленной вам по электронной почте. Код состоит из 6 символов (может содержать буквы и/или цифры).</div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Какие виды кредитных карт можно использовать при оформлении бронирования?</a>
                                                    </div>
                                                    <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                                        <div class="card-body pa-15">Авиакомпания принимает к оплате карточки Visa, MasterCard, American Express и Union Pay любого банка.</div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Я купил билет туда-обратно. Могу ли я воспользоваться только обратным билетом?</a>
                                                    </div>
                                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                                        <div class="card-body pa-15">Да, Вы можете воспользоваться обратным рейсом, но стоимость билета за первый рейс не будет возвращена. </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">Сколько дней рассматривается заявка на возврат/перебронирование? </a>
                                                    </div>
                                                    <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                                        <div class="card-body pa-15">Заявки рассматриваются в порядке очереди. После рассмотрения вашей заявки вам обязательно придет письмо на электронную почту, с которой вы оставляли заявку.</div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6i" aria-expanded="false">Почему я не получил(а) sms/email об изменениях по моему рейсу?</a>
                                                    </div>
                                                    <div id="collapse_6i" class="collapse" data-parent="#accordion_2">
                                                        <div class="card-body pa-15">При отправке уведомлений об изменениях по вылету рейса мы используем контактные данные, которые пассажиры вносят во время бронирования билета. Именно поэтому, очень важно оставлять свои корректные данные в брони.</div>
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