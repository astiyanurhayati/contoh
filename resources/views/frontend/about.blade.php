@extends('layouts.main')
@section('title-head', $subMenu[0]->title)

@section('container')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
    <div class="auto-container">
        <h1>{{$subMenu[0]->name}}</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{url('/')}}">{{$mainMenu[0]->name}}</a></li>
            <li>{{$subMenu[0]->name}}</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- About Section Two -->
<section class="about-section-two alternate" style="background-image: url({{asset('aboutimg/'.$about->bg1)}});">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="divider"><img src="images/icons/divider_1.png" alt="divider"></div>
            <h2>{{$about->judul1}}</h2>
        </div>
        <div class="content-box">
            <span class="devider_icon_one"></span>
            <p>{{$about->desk1}}</p>
        </div>
        <div class="btn-box text-center">
            <a href="#" class="theme-btn btn-style-two regular"><span></span>Our Services<span></span></a>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Features Section -->
<div class="features-section style-two">
    <div class="shape_wrapper shape_one">
        <div class="shape_inner shape_two" style="background-image: url({{asset('aboutimg/'.$about->bg2)}});">
            <div class="overlay"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center light">
            <h2>{{$about->judul2}}</h2>
            <div class="text">{{$about->desk2}}</div>
        </div>
        <div class="row">
            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon-frame"><svg x="0px" y="0px" viewBox="0 0 500 500">
                                <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                            </svg>
                        </div>

                        <!-- cake img -->
                        <div class="icon flaticon-technology"></div>
                    </div>
                    <h3>{{$feature->judul1}}</h3>
                    <p>{{$feature->desk1}}</p>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon-frame"><svg x="0px" y="0px" viewBox="0 0 500 500">
                                <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                            </svg>
                        </div>

                        <!-- cake img -->
                        <div class="icon flaticon-food-7"></div>
                    </div>
                    <h3>{{$feature->judul2}}</h3>
                    <p>{{$feature->desk2}}</p>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon-frame"><svg x="0px" y="0px" viewBox="0 0 500 500">
                                <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                            </svg>
                        </div>

                        <!-- cake img -->
                        <div class="icon flaticon-strawberry"></div>
                    </div>
                    <h3>{{$feature->judul3}}</h3>
                    <p>{{$feature->desk3}}</p>
                   
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon-frame"><svg x="0px" y="0px" viewBox="0 0 500 500">
                                <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                            </svg>
                        </div>

                        <!-- cake img -->
                        <div class="icon flaticon-food-1"></div>
                    </div>
                    <h3>{{$feature->judul4}}</h3>
                    <p>{{$feature->desk4}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features Section -->

<!-- Chef Section -->
<section class="chef-section" style="background-image: url({{asset('aboutimg/'.$about->bg3)}});">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="content">
                        <div class="sec-title text-center">
                            <div class="divider"><img src="images/icons/divider_1.png" alt="divider"></div>
                            <h2>{{$about->owner_name}}</h2>
                        </div>
                        <h4>{{$about->owner_title}}</h4>
                        <div class="divider"><img src="images/icons/icon-devider.png" alt="divider"></div>
                        <p>{{$about->desk3}}</p>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-two regular alt"><span></span>Our Services<span></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{asset('aboutimg/'.$about->owner)}}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Chef Section -->

<!-- Testimonial Section -->
<section class="testimonial-section style-two">
    <div class="shape_wrapper shape_one">
        <div class="shape_inner shape_two" style="background-image: url({{asset('aboutimg/'.$about->bg4)}});">
            <div class="overlay"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="sec-title light text-center">
            <h2>Our Bakery</h2>
        </div>

        <!-- Testimonial Carousel -->
        <div class="testimonial-carousel owl-carousel owl-theme">
            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="text">{{$about->desk4}}</div>
                </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="text">{{$about->desk5}}</div>
                </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="text">{{$about->desk6}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Section -->

<!-- Our Standards -->
<section class="our-standards" style="background-image: url({{asset('aboutimg/'.$about->bg5)}});">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="content">
                    <div class="sec-title text-center">
                        <div class="divider"><img src="images/icons/divider_1.png" alt="divider"></div>
                        <h2>Our Standarts</h2>
                    </div>
                    <div class="divider"><img src="images/icons/icon-devider.png" alt="divider"></div>
                    @php
                    $labels = explode(',', $about->desk7);
                    @endphp

                    @foreach($labels as $label)
                    <p>{{trim($label)}}</p>
                    <span class="icon fa fa-heart"></span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Standards -->

@endsection
@section('script')
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@endsection
