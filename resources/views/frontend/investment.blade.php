@extends('layout.app')

@section('title', $page->title)

@section('content')
    <section class="about about--style1 ">
        <div class="container">
            {!! $page->content !!}
        </div>
    </section>
    <!-- ===============>> Pricing section start here <<================= -->
<section class="pricing padding-top padding-bottom bg-color-3">
    <div class="section-header section-header--max50">
        <h2 class="mb-15 mt-minus-5">Our <span class="style2">Arbitrage Trading Investment </span>plan</h2>
        <p>We have only 2 Powerful Arbitrage Trading Plans that can scale to your needs with fast Withdraws!</p>
    </div>
    <div class="container">
        <div class="pricing__wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing__item" data-aos="fade-right" data-aos-duration="1000">
                        <div class="pricing__item-inner pricing__item-inner--style2">
                            <div class="pricing__item-content">

                                <!-- pricing top part -->
                                <div class="pricing__item-top">
                                    <h6 class="mb-15">BASIC PLAN</h6>
                                    <h3 class="mb-25">$25<span>Minimum</span> </h3>
                                </div>

                                <!-- pricing middle part -->
                                <div class="pricing__item-middle">
                                    <ul class="pricing__list">
                                        <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            100% Powerful Arbitrage Trading Algorithm Robots</li>
                                        <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            Arbitrage Trading runs and scales 100% from our highly secured inHouse trading platform</li>
                                        <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            No Third Party Interference/ Admins</li>
                                            <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            Fast Withdrawal Processing speed</li>
                                            <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            100% Cash Withdrawal Anytime. FAST</li>
                                            <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            5% Referral Earnings</li>
                                            <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            24/7 Premium Quality Support (Calls/ SMS/ WHATSAPP/ Online Chat)</li>
                                    </ul>

                                </div>

                                <!-- pricing bottom part -->
                                <div class="pricing__item-bottom">
                                    <a href="https://app.wealthbridgeafrica.com/register" class="trk-btn trk-btn--outline4">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing__item " data-aos="fade-up" data-aos-duration="1000">
                        <div class="pricing__item-inner pricing__item-inner--style2 active">
                            <div class="pricing__item-content">

                                <!-- pricing top part -->
                                <div class="pricing__item-top">
                                    <h6 class="mb-15">PREMIUM PLAN</h6>
                                    <h3 class="mb-25">$5000<span>Minimum</span> </h3>
                                </div>

                                <!-- pricing middle part -->
                                <div class="pricing__item-middle">
                                    <ul class="pricing__list">
                                        <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                             100% Powerful Arbitrage Trading Algorithm Robots</li>
                                             <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                           Extra High Profit Margin Built to scale Arbitrage Trading</li>
                                        <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                             Arbitrage Trading runs and scales 100% from our highly secured inHouse trading platform</li>
                                        <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            No Third Party Interference/ Admins</li>
                                            <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            Fast Withdrawal Processing speed</li>
                                            <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            100% Cash Withdrawal Anytime. FAST</li>
                                            <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            5% Referral Earnings</li>
                                            <li class="pricing__list-item"><span><img
                                                    src="{{ asset('assets/images/icon/2.png') }}" alt="check"
                                                    class="dark"></span>
                                            24/7 Premium Quality Support (Calls/ SMS/ WHATSAPP/ Online Chat)</li>
                                    </ul>

                                </div>

                                <!-- pricing bottom part -->
                                <div class="pricing__item-bottom">
                                    <a href="https://app.wealthbridgeafrica.com/register" class="trk-btn trk-btn--outline4 active">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing__shape">
        <span class="pricing__shape-item pricing__shape-item--3"><span></span> </span>
        <span class="pricing__shape-item pricing__shape-item--4"><img src="{{ asset('assets/images/others/2.png') }}"
                alt="shape-icon"></span>
    </div>
</section>
<!-- ===============>> Pricing section start here <<================= -->


@endsection
