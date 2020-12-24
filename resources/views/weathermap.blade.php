@extends('layouts.weather')

@section('weather')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <iframe id="weathermap" src="https://openweathermap.org/weathermap?basemap=map&cities=true&layer=clouds&lat=33.2846&lon=58.1836&zoom=3" width="100%" height="100%" style="min-height: 100vh;"></iframe>

    <script>
        $("iframe").on("load", function() {
            $('iframe').contents().find('#header-website').hide();
        });

        window.onload = function () {
            let elem = document.querySelector("iframe");
            console.log(elem.childNodes)
        }
    </script>

    <style>
        iframe .logo {
            display: none
        }
    </style>
@endsection