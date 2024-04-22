@extends('layouts.app')
@section('title')Личный кабинет@endsection
@section('content')
    <div class="container mt-5">
        <div class="d-inline-block">
            <h2 class="text-start border-b-blue">Личный кабинет</h2>
        </div>
        <div class="description-nav fs-6 mt-2">Главная > Личный кабинет</div>
        <div class="bg-block mt-5 p-5">
            <div class="row justify-content-between">
                <div class="col-12 mb-3 fw-500 fs-4">Персональные данные</div>
                <div class="col-12">
                    <div class="fs-4 d-inline">Фамилия:</div>
                    <div class="fs-2 d-inline ms-3">{{ $user -> surname }}</div>
                </div>
                <div class="col-12">
                    <div class="fs-4 d-inline">Имя:</div>
                    <div class="fs-2 d-inline ms-3">{{ $user -> name }}</div>
                </div>
                <div class="col-12">
                    <div class="fs-4 d-inline">Паспорт:</div>
                    <div class="fs-2 d-inline ms-3">{{ $user -> passport }}</div>
                </div>
            </div>
            <div class="row fw-500 fs-4 align-items-center">
                <div class="col-3 ms-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="profile-exit-btn fw-500 btn-booked-buy text-white btn w-100">
                            Выйти из учетной записи
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <h2 class="mt-6">Предстоящие бронирования</h2>
        <div class="mt-5 py-4">
            @if(isset($routesByUser) && count($routesByUser) > 0)
                @foreach($routesByUser as $booking)
                <div class="row justify-content-center my-4">
                    <div class="col-8 bg-block py-4 px-4">
                        <div class="row pb-3 align-items-center justify-content-between">
                            <div class="col-1 w-auto fs-4 text-gray">#RT{{ $booking->id }}</div>
                            <div class="col-4 w-auto ml-auto text-end fs-4">
                                <form method="POST" action="{{ route('booking-delete', $booking->id) }}">
                                    @csrf
                                    <button class="profile-exit-btn fw-500 btn-booked-buy text-white btn w-100">
                                        Удалить бронь
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="fs-5 fw-bold">{{ $booking->start_city }} — {{ $booking->end_city }}</div>
                        <div class="row">
                            <div class="col">
                                <div class="row pt-2 justify-content-between">
                                    <div class="col-3 w-auto">
                                        <div class="fs-3 fw-bold">{{ $booking->start_time }}</div>
                                    </div>
                                    <div class="col-6 w-auto"><img src="../img/line-way-sm.png" alt=""></div>
                                    <div class="col-3 w-auto text-end">
                                        <div class="fs-3 fw-bold">{{ $booking->end_time }}</div>
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-3 text-gray w-auto">
                                        <div class="fs-6">{{ $booking->start_place }}</div>
                                    </div>
                                    <div class="col-3 text-gray w-auto text-end">
                                        <div class="fs-6">{{ $booking->end_place }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="fs-3 fw-bold mt-5 text-center">Вы ничего не бронировали. Это плохо(</div>
            @endif
        </div>
    </div>
@endsection
