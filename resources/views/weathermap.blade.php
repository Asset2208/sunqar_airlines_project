@extends('layouts.weather')

@section('weather')
    <iframe src="https://openweathermap.org/weathermap?basemap=map&cities=true&layer=clouds&lat=33.2846&lon=58.1836&zoom=3" width="100%" height="100%" style="position:absolute; clip:rect(190px,1100px,800px,250px);
            top:-160px;"></iframe>
@endsection