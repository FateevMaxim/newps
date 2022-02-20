@extends('layouts/app')

@section('content')
    <!-- PRELOADER -->
    <div class="loader">
        <div class="loader-icon">
            <img src="{{ asset('images/loading.png') }}" alt="image">
        </div>
    </div>
    <!-- Header area start -->
    <header class="header-area" id="home">
        <div class="container header-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact">
                        <ul>
                            <li><a href="tel:+77471121398"><i class="fas fa-phone-alt"></i>+7 (747) 112-13-98</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=77471121398"><i class="fab fa-whatsapp"></i>What's App</a></li>
                            <li><i class="fas fa-clock"></i>Пн-Вс с 09:00 до 19:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/dentalclinicperfectstom"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/perfect.stom/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container navigation-container">
            <div class="row navigation-area">
                <div class="col-lg-2 logo-col">
                    <div class="logo-area">
                        <a href="#">
                            <img src="{{ asset('images/logo.webp') }}" width="80" alt="Perfect Stom">
                        </a>
                    </div>
                </div>
                @include('layouts.menu')
            </div>
        </div>
    </header>
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

    <!-- Experience area start -->
    <section class="experience-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 experience">
                    <div class="single-experience-item">
                        <div class="experience-col">
                            <img src="images/experience1.png" alt="experience1">
                            <h3>15 Year <br>Experience</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 experience">
                    <div class="single-experience-item">
                        <div class="experience-col">
                            <img src="images/experience2.png" alt="experience2">
                            <h3>Expert <br>Doctors</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 experience">
                    <div class="single-experience-item">
                        <div class="experience-col">
                            <img src="images/experience3.png" alt="experience3">
                            <h3>Cost <br>Effictive</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 experience">
                    <div class="single-experience-item">
                        <div class="experience-col">
                            <img src="images/experience4.png" alt="experience4">
                            <h3>High Quality <br>Laboratory</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience area End -->

    <!-- Testimonial area start -->
    <section class="testimonial-area" id="testimonial">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="heading">
                        <span>Testimonials</span>
                        <h2>What Our Clients Say</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="testimonial-wrap">
                        <div class="client-single active position-1" data-position="position-1">

                            <div class="client-comment">
                                <div class="testimonial-item">
                                    <img src="images/quote.png" alt="quote">
                                    <h3>Highly Recommend </h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <p>It is a long established fact that a reader will be distracted by rt the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less estmel normal distribution of letters, as opposed to using 'Content est here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use th Lorem Ipsum as their default model text, and a search.</p>
                                </div>
                            </div>

                            <div class="client-img client-details">
                                <img src="images/client7.jpg" alt="client7">
                                <div class="client-info">
                                    <h4>rose smith</h4>
                                    <span>MRO, Company</span>
                                </div>
                            </div>

                        </div>

                        <div class="client-single inactive position-2" data-position="position-2">

                            <div class="client-comment">
                                <div class="testimonial-item">
                                    <img src="images/quote.png" alt="quote">
                                    <h3>Highly Recommend </h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <p>It is a long established fact that a reader will be distracted by rt the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less estmel normal distribution of letters, as opposed to using 'Content est here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use th Lorem Ipsum as their default model text, and a search.</p>
                                </div>
                            </div>

                            <div class="client-details">
                                <img src="images/client1.jpg" alt="client1">
                                <div class="client-info">
                                    <h4>alen walker</h4>
                                    <span>SMB, Company</span>
                                </div>
                            </div>

                        </div>

                        <div class="client-single inactive position-3" data-position="position-3">

                            <div class="client-comment">
                                <div class="testimonial-item">
                                    <img src="images/quote.png" alt="quote">
                                    <h3>Highly Recommend </h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <p>It is a long established fact that a reader will be distracted by rt the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less estmel normal distribution of letters, as opposed to using 'Content est here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use th Lorem Ipsum as their default model text, and a search.</p>
                                </div>
                            </div>

                            <div class="client-details">
                                <img src="images/client2.jpg" alt="client2">
                                <div class="client-info">
                                    <h4>alvie smith</h4>
                                    <span>CSO, Company</span>
                                </div>
                            </div>

                        </div>

                        <div class="client-single inactive position-4" data-position="position-4">

                            <div class="client-comment">
                                <div class="testimonial-item">
                                    <img src="images/quote.png" alt="quote">
                                    <h3>Highly Recommend </h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <p>It is a long established fact that a reader will be distracted by rt the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less estmel normal distribution of letters, as opposed to using 'Content est here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use th Lorem Ipsum as their default model text, and a search.</p>
                                </div>
                            </div>

                            <div class="client-details">
                                <img src="images/client3.jpg" alt="client3">
                                <div class="client-info">
                                    <h4>selena gomez</h4>
                                    <span>MIC, Company</span>
                                </div>
                            </div>

                        </div>

                        <div class="client-single inactive position-5" data-position="position-5">

                            <div class="client-comment">
                                <div class="testimonial-item">
                                    <img src="images/quote.png" alt="quote">
                                    <h3>Highly Recommend </h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <p>It is a long established fact that a reader will be distracted by rt the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less estmel normal distribution of letters, as opposed to using 'Content est here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use th Lorem Ipsum as their default model text, and a search.</p>
                                </div>
                            </div>


                            <div class="client-details">
                                <img src="images/client4.jpg" alt="client4">
                                <div class="client-info">
                                    <h4>ally jan</h4>
                                    <span>DIV, Company</span>
                                </div>
                            </div>

                        </div>

                        <div class="client-single inactive position-6" data-position="position-6">

                            <div class="client-comment">
                                <div class="testimonial-item">
                                    <img src="images/quote.png" alt="quote">
                                    <h3>Highly Recommend </h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <p>It is a long established fact that a reader will be distracted by rt the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less estmel normal distribution of letters, as opposed to using 'Content est here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use th Lorem Ipsum as their default model text, and a search.</p>
                                </div>
                            </div>

                            <div class="client-details">
                                <img src="images/client5.jpg" alt="client5">
                                <div class="client-info">
                                    <h4>dawid malan</h4>
                                    <span>WWE, Company</span>
                                </div>
                            </div>

                        </div>

                        <div class="client-single inactive position-7" data-position="position-7">

                            <div class="client-comment">
                                <div class="testimonial-item">
                                    <img src="images/quote.png" alt="quote">
                                    <h3>Highly Recommend </h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <p>It is a long established fact that a reader will be distracted by rt the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less estmel normal distribution of letters, as opposed to using 'Content est here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use th Lorem Ipsum as their default model text, and a search.</p>
                                </div>
                            </div>

                            <div class="client-details">
                                <img src="images/client6.jpg" alt="client6">
                                <div class="client-info">
                                    <h4>shelly ahsan</h4>
                                    <span>SEA, Company</span>
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
    <section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 contact-col7">
                    <div class="form-title">
                        <h2>Get in touch</h2>
                    </div>
                    <div class="form-wrapper">
                        <form id="contact-form" class="atf-contact-form" method="POST" action="php/mail.php">
                            <div class="col-lg-6 col-md-6 col-sm-12 input-col6">
                                <input data-wow-duration="1s" data-wow-delay="0.3s" class="wow animate__animated animate__fadeInLeft" type="text" placeholder="Full Name*" id="name" name="name" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 input-col6">
                                <input data-wow-duration="1s" data-wow-delay="0.4s" class="wow animate__animated animate__fadeInLeft" type="email" id="email" name="email" placeholder="Valid Email Address*" required>
                            </div>
                            <div class="col-lg-12 input-col12">
                                <input data-wow-duration="1s" data-wow-delay="0.5s" class="wow animate__animated animate__fadeInLeft" type="text" placeholder="Subject*" id="subject" name="subject" required>
                            </div>
                            <div class="col-lg-12 textarea-col12">
                                <textarea data-wow-duration="0.7s" data-wow-delay="0.6s" class="wow animate__animated animate__fadeInLeft" name="message" id="message" placeholder="Massage"></textarea>
                            </div>
                            <button data-wow-duration="1s" data-wow-delay="0.7s" class="btn1 wow animate__animated animate__fadeInLeft" type="submit">submit</button>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
                <div class="col-lg-5 contact-col5">
                    <div class="contact-content">
                        <h2>Contact us</h2>
                        <div class="contact-details">
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="location">
                                        <h4>location:</h4>
                                        <p><a href="#">12 - Pkview, San Joes, NY-1206, USA</a></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <div class="phone">
                                        <h4>Phone:</h4>
                                        <p><a href="tel:121234567">+12 123 4567</a></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <div class="email">
                                        <h4>Email:</h4>
                                        <p><a href="mailto:info@company.com">info@company.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-social">
                            <h3>follow us</h3>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area End -->

    <!-- Footer area start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Subscribe Our Newsletter</h2>
                        <form action="#">
                            <input type="text" placeholder="email address here" required>
                            <button class="btn1" type="submit">subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="single-footer-item">
                        <div class="footer-logo">
                            <a href="#">
                                <img src="images/logo.png" alt="logo">
                            </a>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single-footer-item">
                        <div class="link title">
                            <h4>Links</h4>
                            <ul>
                                <li><a href="#">Popular Package</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single-footer-item">
                        <div class="faq title">
                            <h4>FAQ</h4>
                            <ul>
                                <li><a href="#">How much Cost ?</a></li>
                                <li><a href="#">How can I apply ?</a></li>
                                <li><a href="#">What is the process ?</a></li>
                                <li><a href="#">How Guide help us ?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-item">
                        <div class="contact title">
                            <h4>contact</h4>
                            <ul>
                                <li><a href="#"><i class="fas fa-envelope"></i>info@company.com</a></li>
                                <li><a href="#"><i class="fas fa-phone-alt"></i>+12 123 4567</a></li>
                                <li><a href="#"><i class="fas fa-map-marker-alt"></i>12 - Pkview, San Joes, NY-1206, USA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom">
                        <ul>
                            <li>&copy;2021 Copyright Reserved</li>
                            <li>Designed by <a href="#">Finest Web Geek</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="bottomToup active-top" href="#home"><i class="fas fa-arrow-circle-up"></i></a>
    </footer>
    <!-- Footer area End -->
@endsection