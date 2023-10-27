@extends('layout.app')

@section('title', 'Contact Us')

@section('content')
    <!-- ===============>> Contact section start here <<================= -->
    <div class="contact padding-top padding-bottom">
        <div class="container">
            <div class="contact__wrapper">
                <div class="row g-5">
                    <div class="col-md-5">
                        <div class="contact__info" data-aos="fade-right" data-aos-duration="1000">
                            <div class="contact__social">
                                <h3>Get in <span>touch</span>
                                    with us</h3>
                                <ul class="social">
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style4 active"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style4 "><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style4"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style4"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="signin.html" class="social__link social__link--style4"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__details">
                                <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="contact__item-inner">
                                        <div class="contact__item-thumb">
                                            <span><img src="{{ asset('assets/images/contact/images/1.png') }}" alt="contact-icon"
                                                    class="dark"></span>
                                        </div>
                                        <div class="contact__item-content">
                                            <p>
                                                +17192841128
                                            </p>
                                            <p>
                                                +17205020738
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact__item" data-aos="fade-right" data-aos-duration="1100">
                                    <div class="contact__item-inner">
                                        <div class="contact__item-thumb">
                                            <span><img src="{{ asset('assets/images/contact/images/2.png') }}" alt="contact-icon"
                                                    class="dark"></span>
                                        </div>
                                        <div class="contact__item-content">
                                            <p>
                                                support@wealthbridgeafrica.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact__item" data-aos="fade-right" data-aos-duration="1200">
                                    <div class="contact__item-inner">
                                        <div class="contact__item-thumb">
                                            <span><img src="{{ asset('assets/images/contact/images/3.png') }}" alt="contact-icon"
                                                    class="dark"></span>
                                        </div>
                                        <div class="contact__item-content">
                                            <p>
                                                 630 S Dayton St Denver,
                                            </p>
                                            <p>
                                                Colorado(CO), 80247 United States.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact__form">
                            <form action="/" data-aos="fade-left" data-aos-duration="1000">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div>
                                            <label for="name" class="form-label">Name</label>
                                            <input class="form-control" type="text" id="name"
                                                placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control" type="email" id="email"
                                                placeholder="Email here">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <label for="textarea" class="form-label">Message</label>
                                            <textarea cols="30" rows="5" class="form-control" id="textarea" placeholder="Enter Your Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary mt-4 d-block">contact
                                    us
                                    now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__shape">
            <span class="contact__shape-item contact__shape-item--1"><img src="{{ asset('assets/images/contact/4.png') }}"
                    alt="shape-icon"></span>
            <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
        </div>
    </div>
    <!-- ===============>> Contact section start here <<================= -->
@endsection
