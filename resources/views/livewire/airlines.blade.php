<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Страны
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <div style="display: flex">
                <a href="/admin/country" style="margin: 0 5px;">Страны</a>
                <a href="/admin/airports" style="margin: 0 5px">Аэропорты</a>
                <a href="/admin/cities" style="margin: 0 5px">Города</a>
                <a href="/admin/post" style="margin: 0 5px">Посты</a>
                <a href="/admin/airline" style="margin: 0 5px; color: blue;">Авиалинии</a>
                <a href="/admin/flight" style="margin: 0 5px; ">Авиаперелеты</a>
                <a href="/admin/ticket" style="margin: 0 5px">Купленные билеты</a>
                <a href="/admin/class-seats" style="margin: 0 5px;">Виды классов</a>
                <a href="/admin/contact-request" style="margin: 0 5px;">Вопросы/Благодарности</a>
            </div>
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Добавить страну</button>
            @if($isOpen)
                @include('livewire.create_airline')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">#</th>
                        <th class="px-4 py-2">Название</th>
                        <th class="px-4 py-2">Фотография</th>
                        <th class="px-4 py-2">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($airlines as $airline)
                    <tr>
                        <td class="border px-4 py-2">{{ $airline->id }}</td>
                        <td class="border px-4 py-2">{{ $airline->name }}</td>
                        <td class="border px-4 py-2" style="display:flex; justify-content: center;">
                            <img src="{{ $airline->airline_photo }}" alt="{{ $airline->name }}" width="125px">
                        </td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $airline->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Редактировать</button>
                            <button wire:click="delete({{ $airline->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Удалить</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>