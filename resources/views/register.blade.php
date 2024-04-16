@extends('layouts.app')
@section('title')Регистрация@endsection
@section('content')
    <div class="container mt-5">
        <div class="d-inline-block">
            <h2 class="text-start border-b-blue">Регистрация</h2>
        </div>
        <div class="bg-block w-75 mx-auto p-5 pb-3 mt-5">
            <h2>Регистрация</h2>
            <div class="row pt-2 justify-content-between">
                <div class="col-4 py-2">
                    <label for="surname">Фамилия</label>
                    <input placeholder="Иванов" id="surname">
                </div>
                <div class="col-4 py-2">
                    <label for="passport">Серия и номер паспорта</label>
                    <input placeholder="____.______" id="passport">
                </div>
                <div class="col-4 py-2">
                    <label for="email">E-mail</label>
                    <input placeholder="example@mail.ru" type="email" id="email">
                </div>
                <div class="col-4 py-2">
                    <label for="name">Имя</label>
                    <input placeholder="Иван" id="name">
                </div>
                <div class="col-4 py-2">
                    <label for="date">Дата рождения</label>
                    <input type="date" id="date">
                </div>
                <div class="col-4 py-2">
                    <label for="pass">Пароль</label>
                    <input type="password" id="pass">
                </div>
                <div class="col-4 py-2">
                    <label for="thirdName">Отчество</label>
                    <input placeholder="Иванович" id="thirdName">
                </div>
                <div class="col-4 py-2">
                    <label for="tel">Телефон</label>
                    <input type="tel" placeholder="+7" id="tel">
                </div>
                <div class="col-4 py-2">
                    <label for="pass2">Подтверждение пароля</label>
                    <input type="password" id="pass2">
                </div>
                <div  class="col-12">
                    <button class="action-btn-look fw-500 btn-booked-buy mt-4 text-white w-100 btn">Зарегистрироваться</button>
                </div>
                <div class="col text-center pt-2">Уже есть аккаунт? <a class="border-bottom" href="{{route('login')}}">Войти</a></div>
            </div>

        </div>
    </div>
@endsection
