@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/sign_in.css') }}">
@endsection

@section('content')

<div class="container right-panel-active">
    <!-- Sign Up -->
    <div class="container__form container--signup">
        <form action="#" class="form" id="form1">
            <h2 class="form__title">Войти</h2>
            <input type="text" placeholder="Имя" class="input" />
            <input type="password" placeholder="Пароль" class="input" />
            <button class="btn">OK</button>
        </form>
    </div>

    <!-- Sign In -->
    <div class="container__form container--signin">
        <form action="#" class="form" id="form2">
            <h2 class="form__title">Вход</h2>
            <input type="email" placeholder="Email" class="input" />
            <input type="password" placeholder="Password" class="input" />
            <a href="#" class="link">Forgot your password?</a>
            <button class="btn">Войти в аккаунт</button>
        </form>
    </div>

    <!-- Overlay -->
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp">Регистрация</button>
            </div>
        </div>
    </div>
</div>

    
@endsection
