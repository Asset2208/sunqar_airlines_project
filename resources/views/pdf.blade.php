<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Билет №195828</title>

    <style>
        body {
            font-family: DejaVu Sans;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">{{ $title }}</h1>
    <hr>
    <h2 style="text-align: center">Спасибо за покупку</h2>
    <p style="text-align: center">
        <img src="https://chabadpbrome.com/wp-content/uploads/events-manager/success-icon-23192.png" alt="" width="100px">
    </p>
    <div class="card my-2">
        <div class="card-header">
            Номер билета №: {{ $ticket->id }}
        </div>
        {!! QrCode::size(250)->generate('www.google.com'); !!} 
        <h5 class="card-title">
            Откуда: 
            <img src={{ $ticket->flight->city_from->country->cimg }} alt="" width="40px">
            {{ $ticket->flight->city_from->name }} →

             Куда: 
            <img src={{ $ticket->flight->city_to->country->cimg }} alt="" width="40px">
            {{ $ticket->flight->city_to->name }}
        </h5>
        <p class="card-text">
            <span>Дата: </span>
            {{ $ticket->flight->flight_date }}
        </p>
        <p class="card-text">
            <span>Время: </span>
            {{ $ticket->flight->flight_time }}
        </p>
        <hr>
        <p>Уважаемый пассажир,</p>
        <p>
            Иногда нам приходится производить определенные изменения, которые могут повлиять на Ваш рейс. Причины могут быть разными: технические, погодные условия, форс-мажорные обстоятельства и т. д., в результате чего мы вынуждены изменить маршрут, дату / время полета или даже отменить рейс. Поскольку такие ситуации случаются, мы хотели бы убедиться, что мы делаем все возможное для того, чтобы как можно скорее информировать Вас об изменениях.
        </p>
        <p>
            Мы отправляем уведомления об изменениях посредством SMS-сообщений и / или электронной почты, используя контактную информацию, указанную в бронировании. Сроки уведомлений могут варьироваться в зависимости от того, когда происходят изменения.
        </p>
        <p>
            Просим Вас  помочь нам во время уведомлять Вас о таких изменениях следующим образом: <br>

            1) Предоставьте нам Ваш активный номер телефона и адрес электронной почты при бронировании билета через наш Центр бронирования и информации, офисы по продаже авиабилетов или турагентов. При бронировании на нашем сайте, просим убедиться, что Ваши контактные данные внесены корректно без  опечаток. <br>
            2) Убедитесь, что у вас есть постоянный доступ к почтовому ящику, и проверяйте SMS-сообщения и уведомления по электронной почте, приходящие от «Sunqar avialines». <br>

            Мы не будем использовать Вашу контактную информацию в маркетинговых целях без получения Вашего явного согласия на это.
        </p>
</body>
</html>