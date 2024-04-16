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
                <div class="col-4">
                    <label for="surname">Фамилия</label>
                    <input placeholder="Иванов" id="surname">
                </div>
                <div class="col-4">
                    <label for="name">Имя</label>
                    <input placeholder="Иван" id="name">
                </div>
                <div class="col-4">
                    <label for="thirdName">Отчество</label>
                    <input placeholder="Иванович" id="thirdName">
                </div>
            </div>
            <div class="row mt-5 fw-500 fs-4 align-items-center">
                <div class="col-3 ms-auto">
                    <form action="login.html">
                        <button class="profile-exit-btn fw-500 btn-booked-buy text-white btn w-100">
                            Выйти из учетной записи
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <h2 class="mt-6">Предстоящие бронирования</h2>
        <div class="mt-5 py-4">
            <div class="row justify-content-center">
                <div class="col-8 bg-block py-4 px-4">
                    <div class="row pb-3 align-items-center">
                        <div class="col-1 w-auto fs-4 text-gray">#GG832R6</div>
                    </div>
                    <div class="fs-5 fw-bold">Туда: Москва — Ростов-на-Дону</div>
                    <div class="row">
                        <div class="col">
                            <div class="row pt-2 justify-content-between">
                                <div class="col-3 w-auto">
                                    <div class="fs-3 fw-bold">17:00</div>
                                </div>
                                <div class="col-6 w-auto"><img src="../img/line-way-sm.png" alt=""></div>
                                <div class="col-3 w-auto text-end">
                                    <div class="fs-3 fw-bold">22:15</div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-3 text-gray w-auto">
                                    <div class="fs-6">Автовокзал Котельники</div>
                                </div>
                                <div class="col-3 text-gray text-center">
                                    <div class="fs-6">В пути: 4 ч 15 мин</div>
                                </div>
                                <div class="col-3 text-gray w-auto text-end">
                                    <div class="fs-6">Автовокзал Пригородный</div>
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
                                <div class="col-5 w-auto"><img src="../img/line-way-sm.png" alt=""></div>
                                <div class="col-3 w-auto text-end">
                                    <div class="fs-3 fw-bold">01:15</div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-3 text-gray w-auto">
                                    <div class="fs-6">Автовокзал Котельники</div>
                                </div>
                                <div class="col-3 text-gray text-center">
                                    <div class="fs-6">В пути: 4 ч 15 мин</div>
                                </div>
                                <div class="col-3 text-gray w-auto text-end">
                                    <div class="fs-6">Автовокзал Пригородный</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
