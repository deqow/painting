@php
        $homeslide = App\Models\Homeslide::find(1);
@endphp

     <!-- Hero Start -->
     <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">{{ $homeslide->title }}</h1>
                    <p class="fs-4 text-dark mb-4">{{ $homeslide->short_description }}</p>
                    <div class="pt-2">
                        <a href="{{ route('home.contact') }}" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mx-2">Get A Quote</a>
                        <a href="{{ route('home.contact') }}" class="btn btn-outline-secondary rounded-pill py-md-3 px-md-5 mx-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
