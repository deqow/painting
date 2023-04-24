@extends('frontend.main_master')
@section('main')

@section('title')
Home | Painting Website
@endsection

@php
$blogs = App\Models\Blog::latest()->limit(3)->get();
$contact = App\Models\Contact::find(1);
@endphp

    <!-- banner-area -->
    @include('frontend.home_all.home_slide')
    <!-- banner-area-end -->

    <!-- blog Start -->
    @include('frontend.home_all.blog')
    <!-- end blog -->

    <!-- services-area -->
    @include('frontend.home_all.services')
    <!-- services-area-end -->

    <!-- testimonial-area -->
    @include('frontend.home_all.testimonial')
    <!-- testimonial-area-end -->

         <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Latest Articles From Painting Blog</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row g-3">
                @foreach ($blogs as $blog )

                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-primary">
                        <img class="img-fluid w-100" src="{{ $blog->blog_image }}" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">{{ $blog->date }}</p>
                                {{-- <small class="text-white">2045</small> --}}
                            </div>
                            <a class="h4 m-0 text-truncate me-4" href="">{{ $blog->blog_title }}</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                @if($blog['team']['team_image'] == null)
                            <img class="rounded-circle me-2" src="{{ asset('upload\default.jpg') }}" width="30" height="30" alt="">

                            @else
                            <img class="rounded-circle me-2" src="{{ $blog['team']['team_image'] }}" width="30" height="30" alt="">
                            @endif
                                <small class="text-uppercase">{{ $blog['team']['name'] }}</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

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
