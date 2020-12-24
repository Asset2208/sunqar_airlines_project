<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-grid.min.css') }}">
    
    @yield('styles')
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
</head>

<body class="antialiased">
        @if (Route::has('login'))
        <div class="header hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <div class="navbar">
                <a href="/">Главная</a>
                <a href="/information">Информация</a>
                <a href="/about">О нас</a>
                <a href="/contacts">Контакты</a>
                <a href="/user/tickets">Мои билеты</a>
                <a href="/live">LIVE</a>
                <a href="/news">Новости</a>
                <a href="/weather">Погода</a>
            </div>
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Профиль</a>
            @else
            <div class="auth">
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Авторизация</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Регистрация</a>
            </div>
                @endif
            @endif
        </div>
        @endif

        <div class="full-bg">
            <div class="container">
                <div class="header-text">
                    <h1>Поиск авиабилетов</h1>
                    <p>Бронируйте билеты быстро и выгодно</p>
                </div>

                <div class="switch-tabs">
                    <div class="active">
                        Авиабилеты
                    </div>
                </div>

                <div class="search-ticket">
                    <form action="/avia-list-filter" method="get" enctype="multipart/form-data">
                        <div class="search-input-item">
                            <input type="text" name="from_city" placeholder="Откуда" required>
                        </div>

                        <div class="search-input-item">
                            <input type="text" name="to_city" placeholder="Куда" required>
                        </div>

                        <div class="search-input-item">
                            <input id="date_to" onchange="TDate()" type="date" name="date_to" placeholder="Туда" required>
                        </div>

                        <div class="search-input-item">
                            <input type="date" name="date_back" placeholder="Обратно">
                        </div>

                        <div class="submit">
                            <button>Найти</button>
                        </div>

                    </form>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        function TDate() {
                            let UserDate = document.getElementById("date_to").value;
                            let ToDate = new Date();
        
                            if (new Date(UserDate).getTime() <= ToDate.getTime()) {
                                swal("Дата должна быть не позднее сегодняшнего!");
                                document.getElementById("date_to").value = new Date(UserDate).getTime();
                                return false;
                            }
                            return true;
                        }
                    </script>
                </div>
            </div>
        </div>

        <section class="flights">
            <div class="container-fluid">
                <div class="flights-header">
                    <h2>Популярные авиарейсы</h2>
                </div>
                <div class="flights-popular row d-flex justify-content-between">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Талдыкорган</span>
                                <span class="price">от 3900тг</span>
                            </a>
                        </div>
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Нур-Султан</span>
                                <span class="price">от 6900тг</span>
                            </a>
                        </div>
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Талдыкорган</span>
                                <span class="price">от 3900тг</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Талдыкорган</span>
                                <span class="price">от 3900тг</span>
                            </a>
                        </div>
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Талдыкорган</span>
                                <span class="price">от 3900тг</span>
                            </a>
                        </div>
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Талдыкорган</span>
                                <span class="price">от 3900тг</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Талдыкорган</span>
                                <span class="price">от 3900тг</span>
                            </a>
                        </div>
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Талдыкорган</span>
                                <span class="price">от 3900тг</span>
                            </a>
                        </div>
                        <div class="flights-item">
                            <a href="#">
                                <span>Алматы → Талдыкорган</span>
                                <span class="price">от 3900тг</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news">
            <div class="container-fluid">
                <div class="news-header">
                    <h2>Виды билетов</h2>
                </div>

                <div class="news-field row  d-flex justify-content-center">
                    <div class="col-md-5">
                        <p class="header-text">Авиабилеты</p>
                        <p>У нас вы можете купить билеты на самолет дешево, быстро и легко! Мы предлагаем выгодные цены как
                            на внутренние, так и на международные рейсы.</p>
                    </div>
                    <div class="col-md-5">
                        <p class="header-text">Ж/Д билеты</p>
                        <p>
                            Благодаря удобному интерфейсу и быстрому поиску у нас можно купить дешевые билеты на поезд, без
                            очередей и временных затрат.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <p class="header-text">Авиабилеты</p>
                        <p>У нас вы можете купить билеты на самолет дешево, быстро и легко! Мы предлагаем выгодные цены как
                            на внутренние, так и на международные рейсы.</p>
                    </div>
                    <div class="col-md-5">
                        <p class="header-text">Ж/Д билеты</p>
                        <p>
                            Благодаря удобному интерфейсу и быстрому поиску у нас можно купить дешевые билеты на поезд, без
                            очередей и временных затрат.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="main-questions">
            <div class="container-fluid">


                <div class="row d-flex align-items-center">
                    <div class="col-md-3">
                        <img src="{{ url('img/main-page/main-questions.jpg') }}" alt="main question">
                    </div>
                    <div class="col-md-8">
                        <p>Наш сайт производит поиск авиабилетов в нескольких системах бронирования, что позволяет находить
                            дешевые авиабилеты в реальном времени. Поиск настроен на автоматическую выдачу самых удобных и
                            дешевых авиабилетов. В результатах поиска выберите удобный для вас билет и проверьте, подходят
                            ли вам условия тарифа, далее жмите на зелёную кнопку с ценой. В новом окне заполните паспортные
                            и контактные данные, после чего на указанный почтовый ящик придет информация о вашей брони и
                            безопасная ссылка для оплаты заказа. Пройдя по ссылке, заполните реквизиты вашей платежной карты
                            и подтвердите покупку. Вам придет письмо со счетом оплаты и электронный авиабилет.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sub-info">
            <div class="container-fluid">
                <div class="row sub-info-cards d-flex justify-content-center">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img src="{{ url('img/banks/kaspi-dark.png') }}" alt="kaspi">
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img src="{{ url('img/banks/mastercard-dark.png') }}" alt="mastercard">
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img src="{{ url('img/banks/visa-dark.png')}} " alt="visacard">
                    </div>
                </div>
            </div>
        </section>
</body>

</html>