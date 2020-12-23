<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Авиарейсы
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
                <a href="/admin/airline" style="margin: 0 5px">Авиалинии</a>
                <a href="/admin/flight" style="margin: 0 5px; color: blue;">Авиаперелеты</a>
                <a href="/admin/ticket" style="margin: 0 5px">Купленные билеты</a>
                <a href="/admin/class-seats" style="margin: 0 5px;">Виды классов</a>
            </div>
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Добавить авиарейс</button>
            @if($isOpen)
                @include('livewire.create_flight')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">#</th>
                        <th class="px-4 py-2">Откуда</th>
                        <th class="px-4 py-2">Куда</th>
                        <th class="px-4 py-2">Авиалиния</th>
                        <th class="px-4 py-2">Дата вылета</th>
                        <th class="px-4 py-2">Время</th>
                        <th class="px-4 py-2">Время полёта</th>
                        <th class="px-4 py-2">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flights as $flight)
                    <tr>
                        <td class="border px-4 py-2">{{ $flight->id }}</td>
                        <td class="border px-4 py-2">
                            {{ $flight->city_from->name }} 
                            <img src={{ $flight->city_from->country->cimg }} alt=" " width="30px" title={{ $flight->city_from->country->name }}>
                        </td>
                        <td class="border px-4 py-2">
                            {{ $flight->city_to->name }}
                            <img src={{ $flight->city_to->country->cimg }} alt=" " width="30px" title={{ $flight->city_to->country->name }}>
                        </td>
                        <td class="border px-4 py-2">
                            {{ $flight->airline->name }}
                            <img src={{ $flight->airline->airline_photo }} alt=" " width="30px">
                        </td>
                        <td class="border px-4 py-2">{{ $flight->flight_date }}</td>
                        <td class="border px-4 py-2">{{ $flight->flight_time }}</td>
                        <td class="border px-4 py-2">{{ $flight->departure_hour }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $flight->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Редактировать</button>
                            <button wire:click="delete({{ $flight->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Удалить</button>
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>