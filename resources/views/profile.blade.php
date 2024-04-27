@extends('layouts.app')
@section('title')
    Личный кабинет
@endsection
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
        @if($user->login !== "admin")
            <h2 class="mt-6">Предстоящие бронирования</h2>
            <div class="mt-5 py-4">
                @if(isset($routesByUser) && count($routesByUser) > 0)
                    @foreach($routesByUser as $booking)
                        <div class="bg-block mt-5 py-4">
                            <div class="row justify-content-evenly">
                                <div class="col-9 px-4">
                                    <div class="row pb-3 align-items-center">
                                        <div class="col-1 w-auto fs-4 text-gray">#RT{{ $booking->id }}</div>
                                    </div>
                                    <div class="fs-3 fw-bold">{{ $booking->start_city }} — {{ $booking->end_city }}</div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row pt-2 justify-content-between">
                                                <div class="col-3 w-auto">
                                                    <div class="fs-3 fw-bold">{{ \Carbon\Carbon::parse($booking->start_time)->format('H:i') }}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="way-line"></div>
                                                </div>
                                                <div class="col-3 w-auto text-end">
                                                    <div class="fs-3 fw-bold">{{ \Carbon\Carbon::parse($booking->end_time)->format('H:i') }}</div>
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
                                <div class="col-1 p-0 line-vertical bg-white"></div>
                                <div class="col-1 w-auto text-center row align-items-end">
                                    <div>
                                        <div class="text-center mb-1">Дата:</div>
                                        <div class="font-bold fs-4 mb-3">{{ \Carbon\Carbon::parse($booking->date)->format('d.m.Y') }}</div>
                                        <div class="mt-2">
                                            <form method="POST" action="{{ route('booking-delete', $booking->id) }}">
                                                @csrf
                                                <button class="profile-exit-btn fw-500 btn-booked-buy text-white btn w-100">
                                                    Удалить бронь
                                                </button>
                                            </form>
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
        @else
            <h2 class="mt-6">Добавление нового маршрута</h2>
            <form method="POST" action="{{ route("create-route") }}" class="bg-block mt-5 p-5">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-12 mb-3 fw-500 fs-4">Добавление нового маршрута</div>
                    <div class="row pt-2 justify-content-start">
                        <div class="col-3 py-2">
                            <label>Откуда (город):</label>
                            <input required name="start_city">
                        </div>
                        <div class="col-3 py-2">
                            <label>Откуда (место):</label>
                            <input required name="start_place">
                        </div>
                        <div class="col-3 py-2">
                            <label>Время отправления:</label>
                            <input required type="time" name="start_time">
                        </div>
                        <div class="col-3 py-2">
                            <label>Дата отправления</label>
                            <input required type="date" name="date">
                        </div>
                        <div class="col-3 py-2">
                            <label>Куда (город):</label>
                            <input required name="end_city">
                        </div>
                        <div class="col-3 py-2">
                            <label>Куда (место):</label>
                            <input required name="end_place">
                        </div>
                        <div class="col-3 py-2">
                            <label>Время прибытия:</label>
                            <input required type="time" name="end_time">
                        </div>
                    </div>
                </div>
                <div class="row fw-500 fs-4 align-items-center">
                    <div class="col-3 ms-auto">
                        <button type="submit" class="action-btn-look fw-500 btn-booked-buy text-white btn w-100">
                            Добавить
                        </button>
                    </div>
                </div>
            </form>
            <h2 class="mt-5">Список маршрутов на сайте</h2>
            <div class="mt-2 py-4">
                @if(isset($routes) && count($routes) > 0)
                    @foreach($routes as $route)
                        <div class="bg-block mt-3 py-4">
                            <div class="row justify-content-evenly">
                                <div class="col-9 px-4">
                                    <div class="row pb-3 align-items-center">
                                        <div class="col-1 w-auto fs-4 text-gray">#RT{{ $route->id }}</div>
                                    </div>
                                    <div class="fs-3 fw-bold">{{ $route->start_city }} — {{ $route->end_city }}</div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row pt-2 justify-content-between">
                                                <div class="col-3 w-auto">
                                                    <div class="fs-3 fw-bold">{{ \Carbon\Carbon::parse($route->start_time)->format('H:i') }}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="way-line"></div>
                                                </div>
                                                <div class="col-3 w-auto text-end">
                                                    <div class="fs-3 fw-bold">{{ \Carbon\Carbon::parse($route->end_time)->format('H:i') }}</div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col-3 text-gray w-auto">
                                                    <div class="fs-6">{{ $route->start_place }}</div>
                                                </div>
                                                <div class="col-3 text-gray w-auto text-end">
                                                    <div class="fs-6">{{ $route->end_place }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 p-0 line-vertical bg-white"></div>
                                <div class="col-1 w-auto text-center row align-items-end">
                                    <div>
                                        <div class="text-center mb-1">Дата:</div>
                                        <div class="font-bold fs-4 mb-3">{{ \Carbon\Carbon::parse($route->date)->format('d.m.Y') }}</div>
                                        <form method="POST" action="{{ route('book.route', $route->id) }}">
                                            @csrf
                                            <button type="submit"
                                                    class="action-btn-look fw-500 mt-3 btn-booked-buy text-white btn w-100">
                                                Редактировать
                                            </button>
                                        </form>
                                        <form class="mt-2" method="POST"
                                              action="{{ route('delete-route', $route->id) }}">
                                            @csrf
                                            <button class="profile-exit-btn fw-500 btn-booked-buy text-white btn w-100">
                                                Удалить
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="fs-3 fw-bold mt-5 text-center">Маршруты не найдены</div>
                @endif
            </div>
        @endif
    </div>
@endsection
