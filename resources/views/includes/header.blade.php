@if (Route::has('login'))
<div class="header hidden fixed top-0 right-0 px-6 py-4 sm:block">

    @auth
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