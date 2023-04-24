 <!-- Testimonial Start -->
 @php
        $testimonials = App\Models\Testimonial::latest()->get();

 @endphp
 <div class="container-fluid bg-primary bg-testimonial py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row g-0 justify-content-end">
            <div class="col-lg-6">

                <h1 class="display-5 mb-4">Testimonials</h1>

                <div class="owl-carousel testimonial-carousel">
                    @foreach($testimonials as $testimonial )

                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal"><i class="fa fa-quote-left text-secondary me-3"></i>{!! $testimonial->description !!}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid p-1 bg-secondary" src="{{ $testimonial->client_image }}" alt="">
                            <div class="ps-3">
                                <h3>{{ $testimonial->client_name }}</h3>
                                <span class="text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
