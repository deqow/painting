@php
$route = Route::current()->getName();
$allfooter = App\Models\Footer::find(1);
@endphp
<!-- Topbar Start -->
<div class="container-fluid bg-primary d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark py-2 pe-3 border-end border-white" href=""><i class="bi bi-telephone text-secondary me-2"></i>{{ $allfooter->number }}</a>
                    <a class="text-dark py-2 px-3" href=""><i class="bi bi-envelope text-secondary me-2"></i>{{ $allfooter->email }}</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 px-3 border-end border-white" href="{{ $allfooter->facebook }}">
                        <i class="fab fa-facebook-f text-secondary"></i>
                    </a>
                    <a class="text-body py-2 px-3 border-end border-white" href="{{ $allfooter->twitter }}">
                        <i class="fab fa-twitter text-secondary"></i>
                    </a>

                    <a class="text-body py-2 px-3 border-end border-white" href="{{ $allfooter->instagram }}">
                        <i class="fab fa-instagram text-secondary"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-paint-roller text-secondary me-3"></i>Painter</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ ($route == 'home')? 'active' : '' }}">Home</a>
    {{-- <li class="{{ ($route == 'home')? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li> --}}

            <a href="{{ route('home.about') }}" class="nav-item nav-link {{ ($route == 'home.about')? 'active' : '' }}">About</a>
    {{-- <li class="{{ ($route == 'home.about')? 'active' : '' }}"><a href="{{ route('home.about') }}">About</a></li> --}}
            <a href="{{ route('home.service') }}" class="nav-item nav-link {{ ($route == 'home.service')? 'active' : '' }}">Service</a>
            <a href="{{ route('home.blog') }}" class="nav-item nav-link {{ ($route == 'home.blog')? 'active' : '' }}">Blog</a>
            <a href="{{ route('home.contact') }}" class="nav-item nav-link {{ ($route == 'home.contact')? 'active' : '' }}">Contact</a>
        </div>
        <div class="d-none d-lg-flex align-items-center ps-4">
            <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
            <div>
                <h5 class="text-primary mb-1"><small>Call Now</small></h5>
                <h6 class="text-light m-0">{{ $allfooter->number }}</h6>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
</header>
