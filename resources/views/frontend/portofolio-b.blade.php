@extends('layouts.main-b')
@section('title-head', $mainMenu[2]->title)
@section('content')
 <!-- agency_heading_start -->
 <div class="agency_heading">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="agency_text">
                  <h3>Check Our Awesome Stuffs we build <br>
                          Up for Business and Brands</h3>
              </div>
          </div>
      </div>
  </div>
  <div class="animated_shape">
      <div class="anim_1">
          <img src="img/about/1.png" alt="">
      </div>
      <div class="anim_2">
          <img src="img/about/2.png" alt="">
      </div>
  </div>
</div>
<!-- agency_heading_end -->

<!-- works_area_start -->
<div class="works_area">
  <h1 class="opacity_text opacity_text2 d-none d-lg-block">Projects</h1>
  <div class="container">
      <div class="row">
          <div class="col-xl-5 col-md-6">
              <div class="single_work">
                  <div class="work_thumb">
                      <img src="{{asset('portofolioimg/'.$portofolios[0]->image)}}" alt="{{$portofolios[0]->judul}}">
                      <div class="work_hover">
                          <div class="work_inner">
                              <a href="#">View Details</a>
                          </div>
                      </div>
                  </div>
                  <div class="work_heading">
                      <h3>{{$portofolios[0]->judul}}</h3>
                  </div>
              </div>
              <div class="single_work">
                  <div class="work_thumb">
                      <img src="{{asset('portofolioimg/'.$portofolios[1]->image)}}" alt="{{$portofolios[1]->judul}}">
                      <div class="work_hover">
                          <div class="work_inner">
                              <a href="#">View Details</a>
                          </div>
                      </div>
                  </div>
                  <div class="work_heading">
                      <h3>{{$portofolios[1]->judul}}</h3>
                  </div>
              </div>
          </div>
          <div class="col-xl-5 offset-xl-2 col-md-6">
              <div class="single_work spacec-top">
                  <div class="work_thumb">
                      <img src="{{asset('portofolioimg/'.$portofolios[2]->image)}}" alt="{{$portofolios[2]->judul}}">
                      <div class="work_hover">
                          <div class="work_inner">
                              <a href="#">View Details</a>
                          </div>
                      </div>
                  </div>
                  <div class="work_heading">
                      <h3>{{$portofolios[2]->judul}}</h3>
                  </div>
              </div>
              <div class="single_work">
                  <div class="work_thumb">
                      <img src="{{asset('portofolioimg/'.$portofolios[3]->image)}}" alt="{{$portofolios[3]->judul}}">
                      <div class="work_hover">
                          <div class="work_inner">
                              <a href="{{$portofolios[3]->judul}}">View Details</a>
                          </div>
                      </div>
                  </div>
                  <div class="work_heading">
                      <h3>{{$portofolios[3]->judul}}</h3>
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

<!-- counter_area_start -->
{{-- <div class="counter_area minus_padding">
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
</div> --}}
<!-- counter_area_end -->

<!-- instragram_area_start -->
<div class="instragram_area">
      <div class="single_instagram">
          <img src="img/instragram/1.png" alt="">
          <div class="ovrelay">
              <a href="#">
                  <i class="fa fa-instagram"></i>
              </a>
          </div>
      </div>
      <div class="single_instagram">
          <img src="img/instragram/2.png" alt="">
          <div class="ovrelay">
              <a href="#">
                  <i class="fa fa-instagram"></i>
              </a>
          </div>
      </div>
      <div class="single_instagram">
          <img src="img/instragram/3.png" alt="">
          <div class="ovrelay">
              <a href="#">
                  <i class="fa fa-instagram"></i>
              </a>
          </div>
      </div>
      <div class="single_instagram">
          <img src="img/instragram/4.png" alt="">
          <div class="ovrelay">
              <a href="#">
                  <i class="fa fa-instagram"></i>
              </a>
          </div>
      </div>
      <div class="single_instagram">
          <img src="img/instragram/5.png" alt="">
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