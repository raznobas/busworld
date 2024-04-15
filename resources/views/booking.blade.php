@extends('layouts.app')
@section('title')Бронирование@endsection
@section('content')
<div class="container mt-5">
    <div class="d-inline-block">
        <h2 class="text-start border-b-blue">Бронирование</h2>
    </div>
    <div class="description-nav fs-6 mt-2">Главная > Бронирование</div>
    <div class="row gutter-none justify-content-between mt-5">
        <div class="col-8 bg-block py-4 px-4">
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
                        <div class="col-6 w-auto"><img src="../img/line-way-sm.png" alt=""></div>
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
                        <div class="col-5 w-auto"><img src="../img/line-way-sm.png" alt=""></div>
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
        <div class="col-3 bg-block py-4 px-4">
            <h4 class="text-start">Стоимость билетов</h4>
            <div class="price-list mt-2">
                <div class="row fs-6 py-3">
                    <div class="col-1 w-auto me-auto">Взрослый <span class="text-gray">место 44</span></div>
                    <div class="col-1 w-auto">3 696, 64 ₽</div>
                </div>
                <div class="price-line"></div>
                <div class="row fs-6 py-3">
                    <div class="col-1 w-auto me-auto">Взрослый <span class="text-gray">место 43</span></div>
                    <div class="col-1 w-auto">3 696, 64 ₽</div>
                </div>
                <div class="price-line"></div>
                <div class="row fs-6 py-3">
                    <div class="col-1 w-auto me-auto">Взрослый <span class="text-gray">место 42</span></div>
                    <div class="col-1 w-auto">3 696, 64 ₽</div>
                </div>
                <div class="price-line"></div>
                <div class="final-price mt-4  row align-content-center">
                    <h4 class="col-1 me-auto w-auto">Итого: </h4>
                    <h4 class="col-6 w-auto">11 881, 19 ₽</h4>
                </div>
                <form action="booking.html">
                    <button class="action-btn-look fw-500 mt-3 btn-booked-buy text-white btn w-100">
                        Бронировать
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="row gutter-none mt-5">
        <div class="col-8  p-4 pb-5 bg-block">
            <div class="row">
                <div class="col">1. Взрослый, место 44</div>
                <div class="col-1 ms-auto"><a href=""><img class="float-end" src="../img/minus.png" alt=""></a></div>
            </div>
            <div class="row pt-2 justify-content-between">
                <div class="col-4">
                    <label for="surname">Фамилия</label>
                    <input id="surname">
                </div>
                <div class="col-4">
                    <label for="name">Имя</label>
                    <input id="name">
                </div>
                <div class="col-4">
                    <label for="thirdName">Отчество</label>
                    <input id="thirdName">
                </div>
            </div>
            <div class="row pt-3 justify-content-between">
                <div class="col-6">
                    <label for="birthday">Дата рождения</label>
                    <input id="birthday" type="date">
                </div>
                <div class="col-6">
                    <label for="passport">Серия и номер паспорта</label>
                    <input id="passport">
                </div>
            </div>
        </div>
        <div  class="col-8"><button class="action-btn-look fw-500 btn-booked-buy mt-4 text-white w-100 btn">Добавить пассажира</button></div>
    </div>
</div>
@endsection
