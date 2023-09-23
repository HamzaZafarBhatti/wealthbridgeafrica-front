<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover" style="background-image:url({{ asset('assets/images/header/1.png') }})">
    <div class="container">
        <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
            <h2>@yield('title')</h2>
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item "><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                </ol>
            </nav>
        </div>
        <div class="page-header__shape">
            <span class="page-header__shape-item page-header__shape-item--1"><img
                    src="{{ asset('assets/images/header/2.png') }}" alt="shape-icon"></span>
        </div>
    </div>
</section>
<!-- ================> Page header end here <================== -->
