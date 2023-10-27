<!-- ===============>> Header section start here <<================= -->
<header class="header-section @if (Route::is('index')) header-section--style3 @else bg-color-3 @endif">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/logo/wealth21263.png') }}" alt="logo">
                    </a>
                </div>
                @if (Route::is('index'))
                    <div class="header-content d-flex align-items-center">
                @endif
                <div class="menu-area">
                    <ul class="menu @if (Route::is('index')) menu--style2 @else menu--style1 @endif">
                        <li>
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li>
                            <a href="#0">Company</a>
                            <ul class="submenu">
                                <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li><a href="{{ route('howitworks') }}">How it Works</a></li>
                                <li><a href="{{ route('investment') }}">Arbitrage Trading Investment</a></li>
                                <li><a href="{{ route('certification') }}">Certification & Insurance Cover</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Pages</a>
                            <ul class="submenu">
                                <li><a href="{{ route('terms') }}">Terms and Condition</a></li>
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('cookies') }}">Cookies Policy</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="{{ route('contactus') }}">Contact Us</a>
                        </li>
                        <li class="d-md-none">
                            <a href="{{ config('app.back_url') }}/register">Register</a>
                        </li>
                        <li class="d-md-none">
                            <a href="{{ config('app.back_url') }}/login">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="header-action">
                    <div class="menu-area">
                        <div class="header-btn">
                            <a href="{{ config('app.back_url') }}/register"
                                class="trk-btn trk-btn--border trk-btn--primary">
                                <span>Register</span>
                            </a>
                        </div>
                        <div class="header-btn">
                            <a href="{{ config('app.back_url') }}/login"
                                class="trk-btn trk-btn--border trk-btn--primary ms-3">
                                <span>Login</span>
                            </a>
                        </div>

                        <!-- toggle icons -->
                        <div
                            class="header-bar d-lg-none @if (Route::is('index')) header-bar--style2 @else home1 @endif">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                @if (Route::is('index'))
            </div>
            @endif
        </div>
    </div>
    </div>
</header>
<!-- ===============>> Header section end here <<================= -->
