@extends('layouts.application')

@section('styles')
<link rel="stylesheet" href="{{ url('css/contacts.css') }}">
<link rel="stylesheet" href="{{ url('css/home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

@section('content') 
<div class="container contentblock">
    <div class="row">
        <div class="col-md-8 offset-2 rightcontent">
            <h1 class="title">Напишите нам</h1>
            <div class="emailusform">
                <form action="#" id="submitForm" method="post">
                    <div class="arrowlink formrow">
                        <select id="type" name="type" class="form-control" required="required">
                            <option disabled="disabled" selected="selected" value="">Выбрать</option>
                            <option value="Request">Запрос</option>
                            <option value="Complaint">Жалоба</option>
                            <option value="Thanks">Благодарность</option>
                            <option value="Suggestion">Предложение</option>
                        </select>
                        <label class="valid">Тип обратной связи</label>
                    </div>
                    <div class="row">
                        <div class="halfleft formrow">
                            <input type="text" class="form-control"  name="name" required="required">
                            <label>Имя (латинскими буквами)</label>
                        </div>
                        <div class="halfright formrow">
                            <input type="email" class="form-control" name="email"
                                required="required">
                            <label>Электронная почта</label>
                        </div>
                        <div class="halfleft formrow">
                            <input type="text" class="form-control" name="ticket" required="required">
                            <span class="bar"></span>
                            <label>Номер авиабилета/бронирования</label>
                        </div>
                        <div class="halfright formrow" >
                            <input type="date" placeholder="Туда" class="form-control">                                
                            <span class="icon-from i-calendar"></span>
                            <span class="bar"></span>
                            <label>Дата вылета</label>
                        </div>
                    </div>
                    <div class="formrow">
                        <textarea placeholder="Сообщение (максимум 150 слов)" class="form-control" name="message"
                            required="required"></textarea>
                    </div>
                    <div class="attachfile formrow">
                        <input id="attachFile" class="hidden" type="file" name="file">
                        <p id="chosen-file-name-label">Максимум 20 Мб</p>
                    </div>
                    
                    <div class="formrow">
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3"><button id="submitButton" class="btn btn-success"
                                    type="submit">Отправить</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection