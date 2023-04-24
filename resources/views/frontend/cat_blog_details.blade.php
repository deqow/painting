@extends('frontend.main_master')
@section('main')





    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Blog Detail</h1>
                    <div class="pt-2">
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Blog Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- service Start -->
    <div class="container-fluid py-6">
        <div class="container py-5">
            <div class="row g-3">
                <div class="col-lg-8">
                    <!-- service Detail Start -->
                    @foreach ($blogpost as $item)
                    <div class="mb-5">
                        <img class="img-fluid w-100 mb-5" src="{{ asset($item->blog_image) }}" alt="">
                        <h1 class="mb-4">{{$item->blog_title}}</h1>
               <b><i class="fa fa-calendar-alt text-secondary mb-2">   {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</i></b>

                        <p>{!! $item->blog_description !!}</p>

                    </div>
                    @endforeach

                    <!-- service Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <h3 class="mb-4">Comments</h3>
                        @foreach ($testimonials as $testimonial )
                        <div class="d-flex mb-4">
                            <img src="{{ asset($testimonial->client_image) }}" class="img-fluid" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">{{ $testimonial->client_name }}</a> <small><i>{{ $testimonial->created_at }}</i></small></h6>
                                <p>{!! $testimonial->description !!}</p>
                                {{-- <button class="btn btn-sm btn-secondary rounded-pill px-3">Reply</button> --}}
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <!-- Comment List End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5">
                        <h3 class="mb-4">Categories</h3>
                        <div class="d-flex flex-column justify-content-start bg-primary p-4">
                            @foreach ($categories as $category)
                            <a class="h5 mb-4" href="{{ route('category.blog',$category->id) }}"><i class="fa fa-angle-right me-2"></i>{{ $category->blog_category }}</a>

                            @endforeach

                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5">
                        <h3 class="mb-4">Recent Post</h3>
                        <div class="bg-primary p-4">
                            @foreach ($allblogs as $recentblog )
                            <div class="d-flex mb-3">
                                <img class="img-fluid" src="{{ asset($recentblog->blog_image)  }}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="{{ route('blog.details', $recentblog->id) }}" class="h5 d-flex align-items-center bg-white px-3 mb-0">{{ $recentblog->blog_title  }}
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div class="mb-5">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid">
                    </div>
                    <!-- Image End -->

                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Call To Action Start -->
    <div class="container-fluid bg-primary bg-call-to-action py-5" style="margin-top: 90px;">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-4">Do You Have Any Project?</h1>
                    <p class="fs-4 fw-normal">{{ $contact->message }}</p>
                    <a href="{{ route('home.contact') }}" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Start -->





@endsection
