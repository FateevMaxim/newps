@extends('layouts/app')

@section('content')
    <!-- PRELOADER -->
    <div class="loader">
        <div class="loader-icon">
            <img src="{{ asset('images/loading.png') }}" alt="image">
        </div>
    </div>
    <!-- Header area start -->
    @include('layouts.header')
    <!-- Header area End -->

    <!-- Our Team area Start -->
    <section class="our-team-area mt-5" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-heading">
                        <span>@lang('Персонал клиники')</span>
                        <h2>Наша команда!</h2>
                        <p>В клинике Perfect Stom Вас встретят вежливые администраторы и опытные, высококвалифицированные врачи</p>
                        <ul>
                            <li data-filter=".maindoctor">Главврач</li>
                            <li data-filter=".doctor">Врач</li>
                            <li data-filter=".admin">Администратор</li>
                            <li data-filter=".nurse">Ассистент стоматолога</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12 doctor-list">

                    <div class="col-lg-4 col-md-6 col-sm-12 doctor-item mix maindoctor">
                        <div class="single-doctor-item">
                            <div class="team-image">
                                <img src="{{ asset('images/nataliak.jpg') }}" alt="Кадыкова Наталья Александровна">
                            </div>
                            <div class="team-details">
                                <h3>Кадыкова Наталья Александровна</h3>
                                <span>Старший врач</span>
                                <p>Врач стоматолог-терапевт детского и взрослого населения, парадонтолог, лектор.</p>
                                <div class="social">
                                    <button class="btn btn-primary"><a href="" class="link-light">Подробнее</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 doctor-item mix doctor">
                        <div class="single-doctor-item">
                            <div class="team-image">
                                <img src="{{ asset('images/nurbolats.jpg') }}" alt="Касренов Нурболат Сагыдуллаевич">
                            </div>
                            <div class="team-details">
                                <h3>Касренов Нурболат Сагыдуллаевич</h3>
                                <span>Врач</span>
                                <p>Врач-ортопед, хирург, лектор</p>
                                <div class="social">
                                    <button class="btn btn-primary"><a href="" class="link-light">Подробнее</a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 doctor-item mix doctor">
                        <div class="single-doctor-item">
                            <div class="team-image">
                                <img src="{{ asset('images/moldirm.jpg') }}" alt="Мырзашева Мөлдір Əшімақызы">
                            </div>
                            <div class="team-details">
                                <h3>Мырзашева Мөлдір Əшімақызы</h3>
                                <span>Врач</span>
                                <p>Врач-стоматолог-терапевт </p>
                                <div class="social">
                                    <button class="btn btn-primary"><a href="" class="link-light">Подробнее</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 doctor-item mix doctor">
                        <div class="single-doctor-item">
                            <div class="team-image">
                                <img src="{{ asset('images/nargizb.jpg') }}" alt="Байдулла Наргиз Асылбеккызы">
                            </div>
                            <div class="team-details">
                                <h3>Байдулла Наргиз Асылбеккызы</h3>
                                <span>Врач</span>
                                <p>Врач - стоматолог-ортодонт </p>
                                <div class="social">
                                    <button class="btn btn-primary"><a href="" class="link-light">Подробнее</a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 doctor-item mix admin">
                        <div class="single-doctor-item">
                            <div class="team-image">
                                <img src="{{ asset('images/azhars.jpg') }}" alt="Иманкулова Ажар Муратовна">
                            </div>
                            <div class="team-details">
                                <h3>Иманкулова Ажар Муратовна</h3>
                                <span>Администратор</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 doctor-item mix nurse">
                        <div class="single-doctor-item">
                            <div class="team-image">
                                <img src="{{ asset('images/malikaa.jpg') }}" alt="Каменханова Малика Аскаровна">
                            </div>
                            <div class="team-details">
                                <h3>Каменханова Малика Аскаровна</h3>
                                <span>Медицинская сестра</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Our Team area End -->




    <!-- contact area start -->
    @include('layouts.contacts')
    <!-- contact area End -->

    <!-- Footer area start -->
    @include('layouts.footer')
    <!-- Footer area End -->
@endsection