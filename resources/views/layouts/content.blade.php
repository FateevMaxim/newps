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

<!-- Hero area Start -->
<section class="hero-area" style="background-image: url({{ asset('images/main/hero-bg.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 hero-col col-sm-12">
                <div class="hero-content">
                    <h1>Ура рассрочка <span class="text-red">0-0-12 от Kaspi!</span></h1>
                    <figure>
                        <figcaption class="blockquote-footer">
                            до 30 июня
                        </figcaption>
                    </figure>
                    <p>Рассрочка на весь спектр услуг стоматологии. <br />Успейте записаться на бесплатную консультацию!
                    </p>
                    <div class="hero-btn">
                        <ul>
                            <li><a class="btn1 text-white">Видео о клинике</a></li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=hwZcF5YZi50" class="play-btn mfp-iframe">
                                    <img class="wave1" src="{{ asset('images/play-btn.png') }}" alt="play-btn">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero area End -->
<!-- services area start -->
<section class="services-area" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 heading">
                <span>Всё лучшее для Вас</span>
                <h2>Специальные предложения</h2>
                <p>При выборе нашей клиники Вам будут доступны уникальные возможности:</p>
            </div>
        </div>
        <div class="row mynav">
            <div class="col-lg-4 col-md-6 services-col">
                <div class="single-services-item">
                    <img src="{{ asset('images/unique/kaspi21.02.svg') }}" width="120" alt="services1">
                    <h3>Рассрочка <br>Kaspi</h3>
                    <p>Сейчас проходит акция от Kaspi - рассрочка 0-0-12 до 30 июня. Записывайтесь на Бесплатную консультацию сейчас!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 services-col active">
                <div class="single-services-item">
                    <img src="{{ asset('images/unique/consulting.svg') }}" width="200" alt="services2">
                    <h3>Бесплатная <br>Консультация</h3>
                    <p>Возможность поближе познакомиться с доктором, клиникой не заплатив ни копейки!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 services-col">
                <div class="single-services-item">
                    <img src="{{ asset('images/unique/enpf.svg') }}" width="130" alt="services3">
                    <h3>Оплата через <br>ЕНПФ</h3>
                    <p>Вы можете оплатить своё лечение и лечение Ваших близких родственников с помощью пенсионного фонда ЕНПФ!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 services-col">
                <div class="single-services-item">
                    <img src="{{ asset('images/unique/red.png') }}" width="200" alt="services3">
                    <h3>Оплата через <br>Kaspi RED</h3>
                    <p>Не стоит откладывать лечение зубов на завтра, оплачивайте лечение в рассрочку!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 services-col">
                <div class="single-services-item">
                    <img src="{{ asset('images/unique/Kaspi-QR.png') }}" width="100" alt="services3">
                    <h3>Принимаем <br>Kaspi QR</h3>
                    <p>Всё для Вашего удобства =)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<span class="target"></span>
<!-- service area End -->

<!-- Choose area start -->
<section class="choose-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 choose-col">
                <div class="heading">
                    <span>мы лучше Всех</span>
                    <h2>Почему нас выбирают?</h2>
                </div>
                <div class="single-choose-item">
                    <span>1</span>
                    <div class="choose-details">
                        <h4>Более 11 лет опыта</h4>
                        <p>Это позволило нам набраться опыта и сделать приём и лечение максимально комфортными</p>
                    </div>
                </div>
                <div class="single-choose-item">
                    <span>2</span>
                    <div class="choose-details">
                        <h4>Высококвалифицированные врачи</h4>
                        <p>Наши клиника сотрудничает со Школой Стоматолога и наши врачи регулярно посещают семинары лучших стоматологов мира!</p>
                    </div>
                </div>
                <div class="single-choose-item">
                    <span>3</span>
                    <div class="choose-details">
                        <h4>Более 42 000 довольных клиентов</h4>
                        <p>Многие из них выбрали нашу стоматологию в качестве семейной клиники</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 choose-img">
                <img src="images/choose-img.jpg" alt="choose-img">
            </div>
        </div>
    </div>
</section>
<!-- Choose area End -->

<!-- Support area start -->
<section class="departments-area" id="departments">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 heading">
                <span>Услуги нашей клиники</span>
                <h2>Отделения стоматологии Perfect Stom</h2>
                <p>По всем услугам консультация проводится <span class="text-red">Бесплатно</span></p>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support1.jpg" alt="support1">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/dentistry.png') }}" width="100" alt="Терапия">
                        <h4>@lang('Терапия')</h4>
                        <p>
                            <ul class="pl-0">
                                <li>Лечение кариеса</li>
                                <li>Лечение пульпита</li>
                                <li>Пломбы будущего E-Max</li>
                                <li>Лечение периодонтита</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support2.jpg" alt="support2">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/tooth-extraction.png') }}" width="100" alt="Хирургия">
                        <h4>@lang('Хирургия')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Удаление зубов</li>
                            <li>Разрезы при прорезывании зубов</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support3.jpg" alt="support3">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/crown.png') }}" width="100" alt="Ортопедия">
                        <h4>@lang('Ортопедия')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Металлокеримическая коронка под имплантат</li>
                            <li>Коронка металлокерамическая</li>
                            <li>Безметалловая керамическая коронка</li>
                            <li>Коронка диоксид циркония</li>
                            <li>Бюгельные протезы</li>
                            <li>Циркониевая коронка под имплантат</li>
                            <li>Коронка E-Max</li>
                        </ul></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support4.jpg" alt="support4">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/braces.png') }}" width="100" alt="Ортодонтия">
                        <h4>@lang('Ортодонтия')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Металлические лигатурные брекеты</li>
                            <li>Керамические лигатурные брекеты</li>
                            <li>Самолигирующие металлические брекеты "Damon Q"</li>
                            <li>Ретейнеры</li>
                            <li>Пластинка расширяющая</li>
                            <li>Трейнеры</li>
                            <li>Элайнеры Star Smile</li>
                            <li>Ретенционная пластинка</li>
                            <li>Самолигирующие керамические брекеты "Damon Clear"</li>
                        </ul></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support5.jpg" alt="support5">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/dentalimplant.png') }}" width="100" alt="Имплантология">
                        <h4>@lang('Имплантология')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Имплантация (Корея - Osstem)</li>
                            <li>Имплантация (Израиль - Alfa Bio)</li>
                            <li>Синус-лифтинг (Остеопластика)</li>
                            <li>Имплантация Biohorizons</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support6.jpg" alt="support6">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/brush.png') }}" width="100" alt="Пародонтология">
                        <h4>@lang('Пародонтология')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Профессиональная чиска зубов</li>
                            <li>Курс лечения дёсен и проф.чистка</li>
                            <li>Plasmolifting</li>
                            <li>Поддесневой скейлинг</li>
                            <li>Наддесневой скейлинг</li>
                        </ul></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support4.jpg" alt="support4">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/smile.png') }}" width="100" alt="Эстетическая стоматология">
                        <h4>@lang('Эстетическая стоматология')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Художественная реставрация (Восстановление части зуба)</li>
                            <li>Виниры (Керамические вкладки)</li>
                            <li>Украшения на зубы</li>
                            <li>Фотодинамическое Био отбеливание</li>
                        </ul></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support5.jpg" alt="support5">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/kids.png') }}" width="100" alt="Детское лечение">
                        <h4>@lang('Детское лечение')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Фторирование зубов</li>
                            <li>Резекция уздечки языка, губ</li>
                            <li>Кариес молочных зубов</li>
                        </ul></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support6.jpg" alt="support6">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/procedures.png') }}" width="100" alt="Процедурные услуги">
                        <h4>@lang('Процедурные услуги')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Лазер</li>
                            <li>Внутривенная инъекция</li>
                            <li>Внутримышечная инъекция</li>
                            <li>Биоптрон</li>
                            <li>Гидромассаж</li>
                        </ul></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 medical-suppoer">
                <div class="single-departments-item">
                    <div class="feature-img">
                        <img src="images/support6.jpg" alt="support6">
                    </div>
                    <div class="support-details">
                        <img src="{{ asset('images/servicesIcons/x-ray.png') }}" width="100" alt="Рентгенография">
                        <h4>@lang('Рентгенография')</h4>
                        <p>
                        <ul class="pl-0">
                            <li>Панорамный рентген снимок</li>
                            <li>Прицельный рентген снимок</li>
                        </ul></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Support area End -->

<!-- Experience area start -->

<!-- Experience area End -->

<!-- Testimonial area start -->
<section class="testimonial-area" id="testimonial">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="heading">
                    <span>Отзывы</span>
                    <h2>Что клиенты говорят о нас</h2>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="testimonial-wrap">
                    <div class="client-single active position-1" data-position="position-1">

                        <div class="client-comment">
                            <div class="testimonial-item">
                                <img src="images/quote.png" alt="quote">
                                <h3>Рекомендую </h3>
                                <ul>
                                    <li><a><i class="fas fa-star"></i></a></li>
                                    <li><a><i class="fas fa-star"></i></a></li>
                                    <li><a><i class="fas fa-star"></i></a></li>
                                    <li><a><i class="fas fa-star"></i></a></li>
                                    <li><a><i class="fas fa-star"></i></a></li>
                                </ul>
                                <p>Выражаю огромную благодарность Наталье Александровне и Нурболату Сагидулаевичу за их золотые руки !
                                    Долгое время не решалась идти в стоматологию , боялась , благодаря этим врачам жизнь изменилась в лучшую сторону , спасибо вам ! Всем буду рекомендовать эту клинику и этих прекрасных от бога докторов !!!!</p>
                            </div>
                        </div>

                        <div class="client-img client-details">
                            <img src="{{ asset('images/testimonial.png') }}" alt="Отзыв Perfect Stom">
                            <div class="client-info">
                                <h4>Ирина Романова</h4>
                                <span>Алматы(<a href="https://2gis.kz/almaty/firm/9429940000789303/tab/reviews?m=76.874054%2C43.249133%2F16" target="_blank">2Gis</a>)</span>
                            </div>
                        </div>

                    </div>

                    <div class="client-single inactive position-2" data-position="position-2">

                        <div class="client-comment">
                            <div class="testimonial-item">
                                <img src="images/quote.png" alt="quote">
                                <h3>Рекомендую </h3>
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                                <p>Отличная клиника и сейчас в свойём инстограм perfect.stom проводят конкурсы и поздровляют с новый годом !!!</p>
                            </div>
                        </div>

                        <div class="client-details">
                            <img src="{{ asset('images/testimonial.png') }}" alt="Отзыв Perfect Stom">
                            <div class="client-info">
                                <h4>Алёна Зайцева</h4>
                                <span>Алматы(<a href="https://2gis.kz/almaty/firm/9429940000789303/tab/reviews?m=76.874054%2C43.249133%2F16" target="_blank">2Gis</a>)</span>
                            </div>
                        </div>

                    </div>

                    <div class="client-single inactive position-3" data-position="position-3">

                        <div class="client-comment">
                            <div class="testimonial-item">
                                <img src="images/quote.png" alt="quote">
                                <h3>Рекомендую </h3>
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                                <p>Очень хорошая клиника, быстро сделала панорамный снимок!</p>
                            </div>
                        </div>

                        <div class="client-details">
                            <img src="{{ asset('images/testimonial.png') }}" alt="Отзыв Perfect Stom">
                            <div class="client-info">
                                <h4>​Майра Маханбет</h4>
                                <span>Алматы(<a href="https://2gis.kz/almaty/firm/9429940000789303/tab/reviews?m=76.874054%2C43.249133%2F16" target="_blank">2Gis</a>)</span>
                            </div>
                        </div>

                    </div>

                    <div class="client-single inactive position-4" data-position="position-4">

                        <div class="client-comment">
                            <div class="testimonial-item">
                                <img src="images/quote.png" alt="quote">
                                <h3>Рекомендую </h3>
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                                <p>👍 отличная клика , выражаю благодарность врачу Жулдыз, спасибо 🙏🏼</p>
                            </div>
                        </div>

                        <div class="client-details">
                            <img src="{{ asset('images/testimonial.png') }}" alt="Отзыв Perfect Stom">
                            <div class="client-info">
                                <h4>​nifertity27 .</h4>
                                <span>Алматы(<a href="https://2gis.kz/almaty/firm/9429940000789303/tab/reviews?m=76.874054%2C43.249133%2F16" target="_blank">2Gis</a>)</span>
                            </div>
                        </div>

                    </div>

                    <div class="client-single inactive position-5" data-position="position-5">

                        <div class="client-comment">
                            <div class="testimonial-item">
                                <img src="images/quote.png" alt="quote">
                                <h3>Рекомендую </h3>
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                                <p>Вежливые врачи и медсестры. Да и цены не такие бешанные как по городу. Больше всего радует профессионализм.</p>
                            </div>
                        </div>


                        <div class="client-details">
                            <img src="{{ asset('images/testimonial.png') }}" alt="Отзыв Perfect Stom">
                            <div class="client-info">
                                <h4>​Bekbolat Kurmangazyuly</h4>
                                <span>Алматы(<a href="https://2gis.kz/almaty/firm/9429940000789303/tab/reviews?m=76.874054%2C43.249133%2F16" target="_blank">2Gis</a>)</span>
                            </div>
                        </div>

                    </div>

                    <div class="client-single inactive position-6" data-position="position-6">

                        <div class="client-comment">
                            <div class="testimonial-item">
                                <img src="images/quote.png" alt="quote">
                                <h3>Рекомендую </h3>
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                                <p>Моя огромная благодарность Саиду Рустамовичу за огромный профессионализм. Такого замечательного доктора редко встретишь. Бесконечное спокойствие и понимание страхов пациентов. И конечно золотая лёгкая рука. Мой однозначный рекомендасьён!!!!</p>
                            </div>
                        </div>

                        <div class="client-details">
                            <img src="{{ asset('images/testimonial.png') }}" alt="Отзыв Perfect Stom">
                            <div class="client-info">
                                <h4>​Мария Солнцева</h4>
                                <span>Алматы(<a href="https://2gis.kz/almaty/firm/9429940000789303/tab/reviews?m=76.874054%2C43.249133%2F16" target="_blank">2Gis</a>)</span>
                            </div>
                        </div>

                    </div>

                    <div class="client-single inactive position-7" data-position="position-7">

                        <div class="client-comment">
                            <div class="testimonial-item">
                                <img src="images/quote.png" alt="quote">
                                <h3>Рекомендую </h3>
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                                <p>Выражаю огромную благодарность Наталье Александровне и Нурболату Сагидулаевичу за их золотые руки !
                                    Долгое время не решалась идти в стоматологию , боялась , благодаря этим врачам жизнь изменилась в лучшую сторону , спасибо вам ! Всем буду рекомендовать эту клинику и этих прекрасных от бога докторов !!!!</p>
                            </div>
                        </div>

                        <div class="client-details">
                            <img src="{{ asset('images/testimonial.png') }}" alt="Отзыв Perfect Stom">
                            <div class="client-info">
                                <h4>​Ирина Романова</h4>
                                <span>Алматы(<a href="https://2gis.kz/almaty/firm/9429940000789303/tab/reviews?m=76.874054%2C43.249133%2F16" target="_blank">2Gis</a>)</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area End -->

<!-- contact area start -->
@include('layouts.contacts')
<!-- contact area End -->

<!-- Footer area start -->
@include('layouts.footer')
<!-- Footer area End -->
    @endsection