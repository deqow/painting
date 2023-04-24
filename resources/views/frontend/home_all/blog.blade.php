@php
$blogs = App\Models\Blog::latest()->limit(9)->get();
@endphp
  <!-- Blog Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-5">Latest Articles From Painting Blog</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
        </div>
        <div class="row g-3">

    @foreach($blogs as $item)
            <div class="col-xl-4 col-lg-6">
                <div class="blog-item bg-primary">
                    <img class="img-fluid w-100" src="{{ $item->blog_image }}" alt="">
                    <div class="d-flex align-items-center">
                        <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                            <i class="fa fa-calendar-alt text-primary mb-2"></i>
                            {{-- <p class="m-0 text-white">Jan 01</p> --}}
                            <small class="text-white">{{ $item->date }}</small>
                        </div>
                        <a class="h4 m-0 text-truncate me-4" href="{{ route('blog.details',$item->id) }}">{{ $item->blog_title }}</a>
                    </div>
                    <div class="d-flex justify-content-between border-top border-secondary p-4">
                        <div class="d-flex align-items-center">
                            @if($item['team']['team_image'] == null)
                            <img class="rounded-circle me-2" src="{{ asset('upload\default.jpg') }}" width="30" height="30" alt="">

                            @else
                            <img class="rounded-circle me-2" src="{{ $item['team']['team_image'] }}" width="30" height="30" alt="">
                            @endif

                            <small class="text-uppercase">{{ $item['team']['name'] }}</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                            <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                        </div>
                    </div>
                </div>
            </div>
@endforeach


            <div class="col-12 text-center">
                <a href="{{ route('home.blog') }}" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Load More</a>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
