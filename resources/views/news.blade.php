@extends('layouts.application')

@section('styles')

<link rel="stylesheet" href="{{ url('css/news.css') }}">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
@endsection

@section('content')

<div class="news container">
    <div class="row">

        @foreach($posts as $post)
        <div class="col-4 p-1">
            <div class="card" style="width: 18rem;">
                <img src="https://lh3.googleusercontent.com/Zyg2MM3JRH1xJWern5mUfemP27mhT2NskfAqpoOhyj5VNgy4DPuFktOKf86a6iGjbeQ" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3>{{$post->title}}</h3>
                  <h5 class="card-text">{{ $post->body }}</p>
                  <p>Добавлен: {{ $post->created_at }} </p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection