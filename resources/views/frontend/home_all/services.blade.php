@php
$allservices = App\Models\ServiceCategory::latest()->limit(6)->get();
@endphp

<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-5">Professional Painting Services</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
        </div>
        <div class="row gy-4 gx-3">
            @foreach ($allservices as $allservice )
            <div class="col-lg-4 col-md-6 pt-5">
                <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                    <div class="service-icon p-3">
                        <div><i class="fa fa-2x fa-paint-brush"></i></div>
                    </div>
                    <h3 class="mt-5">{{ $allservice->service_category }}</h3>
                    <a class="btn shadow-none text-secondary" href="{{ route('category.service',$allservice->id) }} ">View Detail<i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Services End -->



