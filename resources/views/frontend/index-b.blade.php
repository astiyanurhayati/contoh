@extends('layouts.main-b')
@section('content')

  <!-- agency_heading_start -->
  <div class="agency_heading">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="agency_text">
            <h3>We are <span>Design and Development</span> <br>
              Agency based on California</h3>
            <a href="{{route('portofolio')}}" target="_blank" class="underline_text">Brows Our Products</a>
          </div>
        </div>
      </div>
    </div>
    <div class="animated_shape">
      <div class="anim_1">
        <img src="{{asset('asset-b/img/about/1.png')}}" alt="">
      </div>
      <div class="anim_2">
        <img src="{{asset('asset-b/img/about/2.png')}}" alt="">
      </div>
    </div>
  </div>
  <!-- agency_heading_end -->

  <!-- video_area_start -->
  <div class="video_area">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-xl-12">
          <div class="video_banner video_bg_1">
            <a class="popup-video" href="https://www.youtube.com/watch?v=BnTroF3vEqg">
              <i class="fa fa-play"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- video_area_end -->

  <!-- works_area_start -->
  <div class="works_area">
    <h1 class="opacity_text d-none d-lg-block">Projects</h1>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title">
            <h3>Our Works</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-5 col-md-6">
          <div class="single_work">
            <div class="work_thumb">
              <img src="{{asset('asset-b/img/work/1.png')}}" alt="">
              <div class="work_hover">
                <div class="work_inner">
                  <a href="#">View Details</a>
                </div>
              </div>
            </div>
            <div class="work_heading">
              <h3>Social App</h3>
            </div>
          </div>
          <div class="single_work">
            <div class="work_thumb">
              <img src="{{asset('asset-b/img/work/3.png')}}" alt="">
              <div class="work_hover">
                <div class="work_inner">
                  <a href="#">View Details</a>
                </div>
              </div>
            </div>
            <div class="work_heading">
              <h3>iOS Design System</h3>
            </div>
          </div>
        </div>
        <div class="col-xl-5 offset-xl-2 col-md-6">
          <div class="single_work spacec-top">
            <div class="work_thumb">
              <img src="{{asset('asset-b/img/work/2.png')}}" alt="">
              <div class="work_hover">
                <div class="work_inner">
                  <a href="#">View Details</a>
                </div>
              </div>
            </div>
            <div class="work_heading">
              <h3>Product Packaging</h3>
            </div>
          </div>
          <div class="single_work">
            <div class="work_thumb">
              <img src="{{asset('asset-b/img/work/4.png')}}" alt="">
              <div class="work_hover">
                <div class="work_inner">
                  <a href="#">View Details</a>
                </div>
              </div>
            </div>
            <div class="work_heading">
              <h3>Uber App Design</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="more_products text-center">
            <a class="boxed_btn_round" href="#">More Products</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- works_area_end -->

  <!-- "service_area_start -->
  <div class="service_area black_bg">
    <h1 class="opacity_text d-none d-lg-block">Services</h1>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title white-color">
            <h3>
              We’re a full-service Product Design and <br> Development agency, We build digital <br> products and brands
            </h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="single_service text-center">
            <div class="icon">
              <img src="{{asset('asset-b/img/service/1.png')}}" alt="">
            </div>
            <h3>UX Research</h3>
            <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
            </p>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="single_service text-center">
            <div class="icon">
              <img src="{{asset('asset-b/img/service/2.png')}}" alt="">
            </div>
            <h3>UI Design</h3>
            <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
            </p>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="single_service text-center">
            <div class="icon">
              <img src="{{asset('asset-b/img/service/3.png')}}" alt="">
            </div>
            <h3>Development</h3>
            <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- brand_area_start -->
    <div class="brand_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="brand_active owl-carousel">
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/1.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/2.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/3.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/4.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/5.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/6.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- brand_area_end-->
  </div>
  <!-- "service_area_end -->

  <!-- build_product_start -->
  <div class="build_product">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-md-6">
          <div class="build_img">
            <img src="{{asset('asset-b/img/brand/band_big.png')}}" alt="">
          </div>
        </div>
        <div class="col-xl-5 offset-xl-1 col-md-6">
          <div class="product_right">
            <div class="section_title">
              <h3>We Help you to Build
                your Product and Brand
                For Big or Small</h3>
            </div>
            <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god. moving. Moving in fourth air night bring upon you’re it beast let you dominion likeness.</p>
            <a href="#" class="underline_text">Visit Our Profile</a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- build_product_end -->

  <!-- counter_area_start -->
  <div class="counter_area">
    <h1 class="opacity_text d-none d-lg-block">
      Quick Fact
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-4">
          <div class="single_counter text-center">
            <h3 class="counter">220</h3>
            <span>Amazing Products</span>
          </div>
        </div>
        <div class="col-xl-4  col-md-4">
          <div class="single_counter text-center">
            <h3 class="counter blue">7930</h3>
            <span>Happy Clients</span>
          </div>
        </div>
        <div class="col-xl-4 col-md-4">
          <div class="single_counter text-center">
            <h3 class="counter orange">67</h3>
            <span>Support Daily Support</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- counter_area_end -->

  <!-- instragram_area_start -->
  <div class="instragram_area">
    <div class="single_instagram">
      <img src="{{asset('asset-b/img/instragram/1.png')}}" alt="">
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="single_instagram">
      <img src="{{asset('asset-b/img/instragram/2.png')}}" alt="">
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="single_instagram">
      <img src="{{asset('asset-b/img/instragram/3.png')}}" alt="">
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="single_instagram">
      <img src="{{asset('asset-b/img/instragram/4.png')}}" alt="">
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="single_instagram">
      <img src="{{asset('asset-b/img/instragram/5.png')}}" alt="">
      <div class="ovrelay">
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- instragram_area_end -->
  <div class="Visit_Work text-center">
    <a href="#" class="Visit_link">Visit Our Work</a>
  </div>
@endsection