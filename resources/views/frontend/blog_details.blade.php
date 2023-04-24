@extends('frontend.main_master')
@section('main')

{{--
  <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">{{ $blogs->blog_title }}</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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


            <!-- blog-details-area -->
            <section class="standard__blog blog__details">
<div class="container">
<div class="row">
<div class="col-lg-8">
    <div class="standard__blog__post">
        <div class="standard__blog__thumb">
            <img src="{{ asset($blogs->blog_image) }}" alt="">
        </div>
        <div class="blog__details__content services__details__content">
            <ul class="blog__post__meta">
                <li><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($blogs->created_at)->diffForHumans() }}</li>


            </ul>
            <h2 class="title">{{ $blogs->blog_title }}</h2>
            <p> {!! $blogs->blog_description !!} </p>
        </div>
        <div class="blog__details__bottom">
            <ul class="blog__details__tag">
                <li class="title">Tag:</li>
                <li class="tags-list">
                    <a href="#">{{ $blogs->blog_tags }}</a>

                </li>
            </ul>
            <ul class="blog__details__social">
                <li class="title">Share :</li>
                <li class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </li>
            </ul>
        </div>
        <div class="blog__next__prev">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-md-6">
                    <div class="blog__next__prev__item">
                        <h4 class="title">Previous Post</h4>
                        <div class="blog__next__prev__post">
                            <div class="blog__next__prev__thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_prev.jpg" alt=""></a>
                            </div>
                            <div class="blog__next__prev__content">
                                <h5 class="title"><a href="blog-details.html">Digital Marketing Agency Pricing Guide.</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="blog__next__prev__item next_post text-end">
                        <h4 class="title">Next Post</h4>
                        <div class="blog__next__prev__post">
                            <div class="blog__next__prev__thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_next.jpg" alt=""></a>
                            </div>
                            <div class="blog__next__prev__content">
                                <h5 class="title"><a href="blog-details.html">App Prototyping
                                Types, Example & Usages.</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment comment__wrap">
            <div class="comment__title">
                <h4 class="title">(04) Comment</h4>
            </div>
            <ul class="comment__list">
                <li class="comment__item">
                    <div class="comment__thumb">
                        <img src="assets/img/blog/comment_thumb01.png" alt="">
                    </div>
                    <div class="comment__content">
                        <div class="comment__avatar__info">
                            <div class="info">
                                <h4 class="title">Rohan De Spond</h4>
                                <span class="date">25 january 2021</span>
                            </div>
                            <a href="#" class="reply"><i class="far fa-reply-all"></i></a>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                    </div>
                </li>
                <li class="comment__item children">
                    <div class="comment__thumb">
                        <img src="assets/img/blog/comment_thumb02.png" alt="">
                    </div>
                    <div class="comment__content">
                        <div class="comment__avatar__info">
                            <div class="info">
                                <h4 class="title">Johan Ritaxon</h4>
                                <span class="date">25 january 2021</span>
                            </div>
                            <a href="#" class="reply"><i class="far fa-reply-all"></i></a>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages</p>
                    </div>
                </li>
                <li class="comment__item">
                    <div class="comment__thumb">
                        <img src="assets/img/blog/comment_thumb03.png" alt="">
                    </div>
                    <div class="comment__content">
                        <div class="comment__avatar__info">
                            <div class="info">
                                <h4 class="title">Alexardy Ditartina</h4>
                                <span class="date">25 january 2021</span>
                            </div>
                            <a href="#" class="reply"><i class="far fa-reply-all"></i></a>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                    </div>
                </li>
                <li class="comment__item children">
                    <div class="comment__thumb">
                        <img src="assets/img/blog/comment_thumb04.png" alt="">
                    </div>
                    <div class="comment__content">
                        <div class="comment__avatar__info">
                            <div class="info">
                                <h4 class="title">Rashedul islam Kabir</h4>
                                <span class="date">25 january 2021</span>
                            </div>
                            <a href="#" class="reply"><i class="far fa-reply-all"></i></a>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="comment__form">
            <div class="comment__title">
                <h4 class="title">Write your comment</h4>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Enter your name*">
                    </div>
                    <div class="col-md-6">
                        <input type="email" placeholder="Enter your mail*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Enter your number*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Website*">
                    </div>
                </div>
                <textarea name="message" id="message" placeholder="Enter your Massage*"></textarea>
                <div class="form-grp checkbox-grp">
                    <input type="checkbox" id="checkbox">
                    <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                </div>
                <button type="submit" class="btn">post a comment</button>
            </form>
        </div>
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
<!-- blog-details-area-end -->


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


    <!-- Blog Start -->
    <div class="container-fluid py-6">
        <div class="container py-5">
            <div class="row g-3">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 mb-5" src="{{ asset($blogs->blog_image) }}" alt="">
                        <h1 class="mb-4">{{$blogs->blog_title}}</h1>
               <b><i class="fa fa-calendar-alt text-secondary mb-2">   {{ Carbon\Carbon::parse($blogs->created_at)->diffForHumans() }}</i></b>

                        <p>{!! $blogs->blog_description !!}</p>

                    </div>
                    <!-- Blog Detail End -->

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

                    <!-- Comment Form Start -->
                    <div class="bg-primary p-5">
                        <h3 class="mb-4">Leave a comment</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Leave Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
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
                                <a href="{{ route('blog.details',$recentblog->id) }}" class="h5 d-flex align-items-center bg-white px-3 mb-0">{{ $recentblog->blog_title  }}
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


                    <!-- Plain Text Start -->
                    <div>
                        <h3 class="mb-4">Plain Text</h3>
                        <div class="bg-primary text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                            <a href="" class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                    <!-- Plain Text End -->
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
                    <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                    <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Start -->





@endsection
