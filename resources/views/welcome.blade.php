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
                <h2 class="fw-bold text-center">Найди свой рейс прямо сейчас и забудь о бесконечных
                    надоедливых способах найти именно то, что тебе нужно</h2>
                <div class="row align-items-end mt-3">
                    <div class="col-12">
                        <a href="{{ route('search') }}">
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
        <div class="row mt-6 bg-block justify-content-around align-items-end align-content-end">
            <div class="col-lg-5 col-sm-12 py-5">
                <h2 class="text-start">Хочешь путешествовать?</h2>
                <div class="my-3">Путешествуй!</div>
                <a href="{{ route('search') }}">
                    <button class="btn w-100 bg-blue btn-search text-white">Путешествовать</button>
                </a>
            </div>
            <div class="col col-lg-5">
                <img class="mailing-img img-fluid w-50" src="img/action-girl.png" alt="">
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
