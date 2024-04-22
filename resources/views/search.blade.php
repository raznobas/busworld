@extends('layouts.app')
@section('title')Поиск рейса@endsection
@section('content')
<div class="container mt-5">
    <div class="d-inline-block">
        <h2 class="text-start border-b-blue">Поиск рейса</h2>
    </div>
    <div class="description-nav fs-6 mt-2">Главная > Поиск рейса</div>
    <form class="row input-search-wrapper justify-content-center mt-4">
        @csrf
        <input class="col-2" name="start_city" placeholder="Москва" type="text">
        <input class="col-2" name="end_city" placeholder="Ростов-на-Дону" type="text">
        <input class="col-2" name="date" type="date">
        <button type="submit" class="col-1 btn btn-mailing btn-search-page text-white">Найти</button>
    </form>
    <a href="{{ route('reset-search') }}" class="w-full d-block text-center mt-2">
    <div class="btn btn-danger text-white mx-auto">Сбросить поиск</div>
    </a>
    @if(isset($routes) && count($routes) > 0)
        @foreach($routes as $route)
            <div class="bg-block mt-5 py-4">
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
                                        <div class="fs-3 fw-bold">{{ $route->start_time }}</div>
                                    </div>
                                    <div class="col-6 w-auto"><img src="../img/line-way.png" alt=""></div>
                                    <div class="col-3 w-auto text-end">
                                        <div class="fs-3 fw-bold">{{ $route->end_time }}</div>
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-3 text-gray w-auto">
                                        <div class="fs-6">{{ $route->start_place }}</div>
                                    </div>
                                    {{--                            <div class="col-3 text-gray text-center">--}}
                                    {{--                                <div class="fs-6">В пути: 4 ч 15 мин</div>--}}
                                    {{--                            </div>--}}
                                    <div class="col-3 text-gray w-auto text-end">
                                        <div class="fs-6">{{ $route->end_place }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 p-0 line-vertical bg-white"></div>
                    <div class="col-1 w-auto text-center row align-items-end">
                        <div class="mt-5">
                            <div class="text-center mb-1">Дата:</div>
                            <div class="font-bold fs-4 mb-3">{{ $route->date }}</div>
                            <form action="{{ route('book.route', $route->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="action-btn-look fw-500 mt-3 btn-booked-buy text-white btn w-100">
                                    Забронировать
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
@endsection
