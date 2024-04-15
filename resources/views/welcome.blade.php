@extends('layouts.app')
@section('title')Главная@endsection
@section('content')
    <div class="container-fluid p-0 bg-bus text-white">
        <div class="call text-uppercase fw-bold text-end ms-auto text-70">
            <div>Мы сближаем города</div>
            <div>Вы живете там, где хотите</div>
        </div>
{{--        <div class="bg-linear"></div>--}}
    </div>
    <div class="container mt-6">
        <div class="row justify-content-center">
            <div class="col-6 block-search bg-block">
                <h2 class="fw-bold text-center">Найди свой рейс</h2>
                <div class="row mt-5">
                    <div class="col">
                        <label for="from">Откуда</label>
                        <input id="from">
                    </div>
                    <div class="col">
                        <label for="where">Куда</label>
                        <input id="where">
                    </div>
                    <div class="col-3">
                        <label for="people">Пассажиры</label>
                        <input type="number" id="people">
                    </div>
                </div>
                <div class="row align-items-end mt-3">
                    <div class="col">
                        <label for="to">Туда</label>
                        <input type="date" id="to">
                    </div>
                    <div class="col">
                        <label for="rev">Обратно</label>
                        <input type="date" id="rev">
                    </div>
                    <div class="col-3">
                        <a href="pages/search.html">
                            <button class="btn w-100 bg-blue btn-search text-white">Искать</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 mt-6">
        <img class="w-100" src="img/gallery.png" alt="">
    </div>
    <div class="container mt-6">
        <div id="action" class="row justify-content-between">
            <div class="col-5 w-auto"><h2 class="fw-bold">Лучшие акции недели</h2></div>
        </div>
        <div class="row mt-4">
            <div class="col px-0 mx-2 action-block position-relative bg-block">
                <div class="action-text px-4 pt-4">
                    <div class="fs-6 fw-light">Бессрочная</div>
                    <div class="fw-bold mt-1">ОАЭ: отель Atlantis The Palm 5* со скидкой 10000₽</div>
                </div>
                <img class="action-img mt-3" src="img/Rectangle%2039.png" alt="">
                <div class="action-text-hidden fw-bold position-absolute pt-4 px-4">На сероводородном курорте можно
                    подлатать своё офисное тело и провести время в окружении таких же молодых и здоровых, как вы.
                </div>
                <button class="btn fs-6 action-btn-look text-white position-absolute">Смотреть</button>
            </div>
            <div class="col px-0 mx-2 action-block position-relative bg-block">
                <div class="action-text px-4 pt-4">
                    <div class="fs-6 fw-light">21.06 - 31.10</div>
                    <div class="fw-bold mt-1">Катар: Hilton Salwa Beach Resort & Villa 5* — скидки и бонусы</div>
                </div>
                <img class="action-img mt-3" src="img/Rectangle%2039-1.png" alt="">
                <div class="action-text-hidden fw-bold position-absolute pt-4 px-4">В программе — водные процедуры, прогулки
                    по саду и визит на дачу Сталина.
                </div>
                <button class="btn fs-6 action-btn-look text-white position-absolute">Смотреть</button>
            </div>
            <div class="col px-0 mx-2 action-block position-relative bg-block">
                <div class="action-text px-4 pt-4">
                    <div class="fs-6 fw-light">15.04 - 23.10</div>
                    <div class="fw-bold mt-1">Мальдивы: Finolhu Maldives 5* Deluxe — скидки до 20%</div>
                </div>
                <img class="action-img mt-3" src="img/Rectangle%2039-2.png" alt="">
                <div class="action-text-hidden fw-bold position-absolute pt-4 px-4">По маршруту вас будет сопровождать
                    профессиональный гид. Посадка на экскурсию осуществляется с вашего отеля
                    или ближайшей автобусной остановки.
                </div>
                <button class="btn fs-6 action-btn-look text-white position-absolute">Смотреть</button>
            </div>
        </div>
        <div class="row mt-6 bg-block mailing-wrapper justify-content-around align-items-end align-content-end">
            <div class="col-5 py-5 ">
                <h2 class="text-start">Хочешь путешествовать?</h2>
                <div class="my-3">Путешествуй!</div>
                <a href="pages/search.html">
                    <button class="btn w-100 bg-blue btn-search text-white">Путешествовать</button>
                </a>
            </div>
            <div class="col-5">
                <img class="mailing-img" src="img/action-girl.png" alt="">
            </div>
        </div>
        <h2 class="mt-6 text-center">Почему нам стоит доверять?</h2>
        <div class="row justify-content-center mt-5">
            <div class="col-3 mx-1 col-lg-8 col-md-8 py-1 w-auto">
                <div class="row trust-block">
                    <div class="col-7 pt-4 ps-4">
                        <div class="text-uppercase">Большой опыт</div>
                        <div class="mt-3 fs-4 fw-500">Более 10 лет на трассе и не одной аварии</div>
                    </div>
                    <div class="col trust-icon">
                        <div class="row h-100 align-items-end justify-content-end">
                            <div class="col-1 w-auto"><img src="img/icon_like.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-1 col-lg-8 col-md-8 py-1 w-auto">
                <div class="row trust-block">
                    <div class="col-7 pt-4 ps-4">
                        <div class="text-uppercase">Надежность</div>
                        <div class="mt-3 fs-4 fw-500">Огромное число положительных отзывов</div>
                    </div>
                    <div class="col trust-icon">
                        <div class="row h-100 align-items-end justify-content-end">
                            <div class="col-1 w-auto"><img src="img/icon_heart.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-1 col-lg-8 col-md-8 py-1 w-auto">
                <div class="row trust-block">
                    <div class="col-7 pt-4 ps-4">
                        <div class="text-uppercase">Транспорт</div>
                        <div class="mt-3 fs-4 fw-500">Новейшие автобусы и отличное обслуживание</div>
                    </div>
                    <div class="col trust-icon">
                        <div class="row h-100 align-items-end justify-content-end">
                            <div class="col-1 w-auto"><img src="img/icon%20_truck.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
