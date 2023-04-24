@extends('frontend.main_master')
@section('main')
@section('title')
Blog | EasyLearning Website
@endsection


{{-- <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
               <h2 class="title"> All Blogs </h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->


            <!-- blog-area -->
            <section class="standard__blog">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                        @foreach($allblogs as $item)
<div class="standard__blog__post">
    <div class="standard__blog__thumb">
        <a href="blog-details.html"><img src="{{ asset($item->blog_image) }}" alt=""></a>
        <a href="blog-details.html" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
    </div>
    <div class="standard__blog__content">
        <div class="blog__post__avatar">
            <div class="thumb"><img src="{{ asset($item->blog_image) }}" alt=""></div>
            <span class="post__by">By : <a href="#">Halina Spond</a></span>
        </div>
        <h2 class="title"><a href="{{ route('blog.details',$item->id) }}">{{$item->blog_title}}</a></h2>
        <p>{!! Str::limit($item->blog_description, 200) !!}  </p>
        <ul class="blog__post__meta">
            <li><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>


        </ul>
    </div>
</div>
                            @endforeach


                            <div class="pagination-wrap">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="blog__sidebar">
                                <div class="widget">
                                    <form action="#" class="search-form">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="fal fa-search"></i></button>
                                    </form>
                                </div>


        <div class="widget">
            <h4 class="widget-title">Recent Blog</h4>
            <ul class="rc__post">

               @foreach($allblogs as $all )
                <li class="rc__post__item">
                    <div class="rc__post__thumb">
                        <a href="blog-details.html"><img src="{{ asset($all->blog_image) }} " alt=""></a>
                    </div>
                    <div class="rc__post__content">
                        <h5 class="title"><a href="blog-details.html">{{ $all->blog_title }}
                         </a></h5>
                        <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }} </span>
                    </div>
                </li>
                @endforeach

                                    </ul>
                                </div>

                               <div class="widget">
            <h4 class="widget-title">Categories</h4>
            <ul class="sidebar__cat">
            	@foreach($categories as $cat)
                <li class="sidebar__cat__item"><a href="{{ route('category.blog',$cat->id) }}">{{ $cat->blog_category  }}  </a></li>
                @endforeach
            </ul>
        </div>


                                <div class="widget">
                                    <h4 class="widget-title">Recent Comment</h4>
                                    <ul class="sidebar__comment">
                                        <li class="sidebar__comment__item">
                                            <a href="blog-details.html">Rasalina Sponde</a>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                        </li>
                                        <li class="sidebar__comment__item">
                                            <a href="blog-details.html">Rasalina Sponde</a>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                        </li>
                                        <li class="sidebar__comment__item">
                                            <a href="blog-details.html">Rasalina Sponde</a>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                        </li>
                                        <li class="sidebar__comment__item">
                                            <a href="blog-details.html">Rasalina Sponde</a>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Popular Tags</h4>
                                    <ul class="sidebar__tags">
                                        <li><a href="blog.html">Business</a></li>
                                        <li><a href="blog.html">Design</a></li>
                                        <li><a href="blog.html">apps</a></li>
                                        <li><a href="blog.html">landing page</a></li>
                                        <li><a href="blog.html">data</a></li>
                                        <li><a href="blog.html">website</a></li>
                                        <li><a href="blog.html">book</a></li>
                                        <li><a href="blog.html">Design</a></li>
                                        <li><a href="blog.html">product design</a></li>
                                        <li><a href="blog.html">landing page</a></li>
                                        <li><a href="blog.html">data</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->


            <!-- contact-area -->
            <section class="homeContact homeContact__style__two">
                <div class="container">
                    <div class="homeContact__wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section__title">
                                    <span class="sub-title">07 - Say hello</span>
                                    <h2 class="title">Any questions? Feel free <br> to contact</h2>
                                </div>
                                <div class="homeContact__content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                    <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="homeContact__form">
                                    <form action="#">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter mail*">
                                        <input type="number" placeholder="Enter number*">
                                        <textarea name="message" placeholder="Enter Massage*"></textarea>
                                        <button type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main> --}}





























          <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Latest Blog</h1>
                    <div class="pt-2">
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Latest Articles From Painting Blog</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row g-3">
                @foreach ($allblogs as $blog )
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-primary">
                        <img class="img-fluid w-100" src="{{ $blog->blog_image }}" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                {{-- <p class="m-0 text-white">Jan 01</p> --}}
                                <small class="text-white">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4" href="{{ route('blog.details',$blog->id) }}">{{ $blog->blog_title }}</a>

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



                {{-- <div class="col-12 text-center">
                    <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">{{ $allblogs->links()}}</a>
                </div> --}}
 
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
                    <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                    <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Start -->


@endsection
