@extends('layouts.app')
@section('title')Регистрация@endsection
@section('content')
<div class="container mt-5">
        <div class="d-inline-block">
            <h2 class="text-start border-b-blue">Регистрация</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="bg-block w-75 mx-auto p-5 pb-3 mt-5">
                <h2>Регистрация</h2>
                <div class="row pt-2 justify-content-between">
                    <div class="col-6 py-2">
                        <label for="surname">Фамилия</label>
                        <input required placeholder="Иванов" name="surname">
                    </div>
                    <div class="col-6 py-2">
                        <label for="name">Имя</label>
                        <input required placeholder="Иван" name="name">
                    </div>
                    <div class="col-6 py-2">
                        <label for="login">Логин</label>
                        <input required type="text" name="login">
                    </div>
                    <div class="col-6 py-2">
                        <label for="passport">Серия и номер паспорта</label>
                        <input placeholder="____.______" name="passport">
                    </div>
                    <div class="col-6 py-2">
                        <label for="password">Пароль</label>
                        <input required type="password" name="password">
                    </div>

                    <div  class="col-12">
                        <button type="submit"
                                class="action-btn-look fw-500 btn-booked-buy mt-4 text-white w-100 btn">Зарегистрироваться</button>
                    </div>
                    <div class="col text-center pt-2">Уже есть аккаунт? <a class="border-bottom" href="{{route('login')}}">Войти</a></div>
                </div>
            </div>
        </form>
    </div>
@endsection
