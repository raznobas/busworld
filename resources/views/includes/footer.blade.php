<footer class="mt-6 container-fluid">
    <div class="container py-5">
        <div class="row footer-wrapper justify-content-between align-items-center">
            <div class="col-2">
                <img class="logo-footer" src="img/logo_big.png" alt="logo">
                <div class="fs-6 mt-3">BusWorld это профессиональные перевозки пассажиров по всему миру. Возим людей по
                    всей России
                </div>
            </div>
            <div class="col-7">
                <div class="row fs-6 justify-content-center">
                    <div class="col">
                        <a href="{{ route('search') }}" class="fw-500 fs-4">Поиск рейса</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('login') }}" class="fw-500 fs-4">Авторизация</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('profile') }}" class="fw-500 fs-4">Личный кабинет</a>
                    </div>
                </div>
            </div>
            <div class="col-3 w-auto">
                <div>
                    <p class="fw-500 fs-5">Поможем с заказом</p>
                    <img src="img/tel.png" alt="">
                    <p class="d-inline-block ms-1">8 (800) 100-10-10</p>
                </div>
                <div class="mt-3">
                    <p class="fw-500 fs-5">Мы в социальных сетях</p>
                    <img src="img/link_social.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
