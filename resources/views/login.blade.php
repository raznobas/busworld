@extends('layouts.app')
@section('title')Вход@endsection
@section('content')
<div class="container mt-5">
        <div class="d-inline-block">
            <h2 class="text-start border-b-blue">Вход</h2>
        </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="bg-block w-25 mx-auto p-5 pb-4 mt-5 login-mob">
            <h2>Вход</h2>
            <div class="row pt-2 justify-content-center">
                <div class="col-12 py-2">
                    <label for="login">Логин</label>
                    <input required type="text" name="login">
                </div>
                <div class="col-12 py-2">
                    <label for="pass">Пароль</label>
                    <input required type="password" name="password">
                </div>
                <div class="col-12">
                    <button type="submit" class="action-btn-look fw-500 btn-booked-buy mt-4 text-white w-100 btn">Войти</button>
                </div>
                <div class="col pt-2 text-center">Нет аккаунта? <a class="border-bottom" href="{{route('register')}}">Зарегистроваться</a>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
