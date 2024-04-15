@extends('layouts.app')
@section('title')Поиск рейса@endsection
@section('content')
<div class="container mt-5">
    <div class="d-inline-block">
        <h2 class="text-start border-b-blue">Поиск рейса</h2>
    </div>
    <div class="description-nav fs-6 mt-2">Главная > Поиск рейса</div>
    <div class="row input-search-wrapper mt-4 ">
        <input class="col" placeholder="Москва" type="text">
        <input class="col" placeholder="Ростов-на-Дону" type="text">
        <input class="col" type="date">
        <input class="col" placeholder="Пассажиров" type="number">
        <button class="col-1 btn btn-mailing btn-search-page text-white">Найти</button>
    </div>
    <div class="bg-block mt-5 py-4">
        <div class="row justify-content-evenly">
            <div class="col-9 px-4">
                <div class="row pb-3 align-items-center">
                    <div class="col-1 w-auto fs-4 text-gray">#GG832R6</div>
                    <div class="col-1"><img src="../img/Japan.png" alt=""></div>
                </div>
                <div class="fs-5 fw-bold">Туда: Москва — Ростов-на-Дону</div>
                <div class="row">
                    <div class="col">
                        <div class="row pt-2 justify-content-between">
                            <div class="col-3 w-auto">
                                <div class="fs-3 fw-bold">17:00</div>
                            </div>
                            <div class="col-6 w-auto"><img src="../img/line-way.png" alt=""></div>
                            <div class="col-3 w-auto text-end">
                                <div class="fs-3 fw-bold">22:15</div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-3 text-gray w-auto">
                                <div class="fs-6">Автовокзал Котельники</div>
                                <div class="fs-6">01 ноября 2022, вт</div>
                            </div>
                            <div class="col-3 text-gray text-center">
                                <div class="fs-6">В пути: 4 ч 15 мин</div>
                            </div>
                            <div class="col-3 text-gray w-auto text-end">
                                <div class="fs-6">Автовокзал Пригородный</div>
                                <div class="fs-6">02 ноября 2022, вт</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fs-5 pt-3 fw-bold">Обратно: Ростов-на-Дону — Москва</div>
                <div class="row">
                    <div class="col">
                        <div class="row pt-2 justify-content-between">
                            <div class="col-3 w-auto">
                                <div class="fs-3 fw-bold">22:00</div>
                            </div>
                            <div class="col-5 w-auto"><img src="../img/line-way.png" alt=""></div>
                            <div class="col-3 w-auto text-end">
                                <div class="fs-3 fw-bold">01:15</div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-3 text-gray w-auto">
                                <div class="fs-6">Автовокзал Котельники</div>
                                <div class="fs-6">01 ноября 2022, вт</div>
                            </div>
                            <div class="col-3 text-gray text-center">
                                <div class="fs-6">В пути: 4 ч 15 мин</div>
                            </div>
                            <div class="col-3 text-gray w-auto text-end">
                                <div class="fs-6">Автовокзал Пригородный</div>
                                <div class="fs-6">02 ноября 2022, вт</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 p-0 line-vertical bg-white"></div>
            <div class="col-1 w-auto text-center row align-items-end">
                <div class="mt-5">
                    <a href="{{ route("booking") }}">
                        <button class="action-btn-look fw-500 mt-3 btn-booked-buy text-white btn w-100">
                            Забронировать
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
