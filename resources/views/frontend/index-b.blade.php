@extends('layouts.main-b')
@section('title-head', $mainMenu[0]->title)
@section('content')

  <!-- agency_heading_start -->
  <div class="agency_heading">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="agency_text">
            <h3>Jasa Pembuatan <span>UI/UX Design & Website</span><br>
               Konsultasi Gratis Sekarang!</h3>
            <a href="{{route('portofolio')}}" target="_blank" class="underline_text">Lihat Lebih Lanjut</a>
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
            <a class="popup-video" href="https://www.youtube.com/watch?v=2hO5kma3uX8">
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
              <img src="{{asset('portofolioimg/'.$portofolio[0]->image)}}" alt="{{$portofolio[0]->judul}}">
              <div class="work_hover">
                <div class="work_inner">
                  <a href="{{route('detail.porto', $portofolio[0]->slug)}}">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="work_heading">
              <h3>{{$portofolio[0]->judul}}</h3>
            </div>
          </div>
          <div class="single_work">
            <div class="work_thumb">
              <img src="{{asset('portofolioimg/'.$portofolio[1]->image)}}" alt="{{$portofolio[1]->judul}}">
              <div class="work_hover">
                <div class="work_inner">
                  <a href="{{route('detail.porto', $portofolio[1]->slug)}}">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="work_heading">
              <h3>{{$portofolio[1]->judul}}</h3>
            </div>
          </div>
        </div>
        <div class="col-xl-5 offset-xl-2 col-md-6">
          <div class="single_work spacec-top">
            <div class="work_thumb">
              <img src="{{asset('portofolioimg/'.$portofolio[2]->image)}}" alt="{{$portofolio[2]->judul}}">
              <div class="work_hover">
                <div class="work_inner">
                  <a href="{{route('detail.porto', $portofolio[2]->slug)}}">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="work_heading">
              <h3>{{$portofolio[2]->judul}}</h3>
            </div>
          </div>
          <div class="single_work">
            <div class="work_thumb">
              <img src="{{asset('portofolioimg/'.$portofolio[3]->image)}}" alt="{{$portofolio[3]->judul}}">
              <div class="work_hover">
                <div class="work_inner">
                  <a href="{{route('detail.porto', $portofolio[3]->slug)}}">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="work_heading">
              <h3>{{$portofolio[3]->judul}}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="more_products text-center">
            <a href="{{route('portofolio')}}">Lihat Detail</a>
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
              Kami Menyediakan Layanan Pembuatan <br> Product Digital Impian Anda<br>  
            </h3>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-xl-4 col-md-6">
          <div class="single_service text-center">
            <div class="icon">
              <img src="{{asset('asset-b/img/service/2.png')}}" alt="">
            </div>
            <h3>UI/UX <br> Design</h3>
            <p>Desain profesional, menarik, kreatif, dan responsif yang mencerminkan kualitas dan profesionalisme bisnis Anda.</p>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="single_service text-center">
            <div class="icon">
              <img src="{{asset('asset-b/img/service/3.png')}}" alt="">
            </div>
            <h3>Website Development</h3>
            <p>Merancang website yang sesuai dengan kebutuhan untuk berbagai macam bidang usaha Anda.</p>
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
                <img src="{{asset('asset-b/img/brand/HTML.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/CSS.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/BOOTSTRAP.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/TAILWIND.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/PHP.png')}}" alt="" class=" text-center">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/LARAVEL.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/CODEIGNITER.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/JAVASCRIPT.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/REACT.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/NEXTJS.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/VUEJS.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/FLUTTER.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/MYSQL.png')}}" alt="">
              </div>
              <div class="single_brand">
                <img src="{{asset('asset-b/img/brand/POSTGRESQL.png')}}" alt="">
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
              <h3>Kami Membantu Membangun Produk Digital Impian Anda!</h3>
            </div>
            <p>Tim kami terdiri dari anak-muda yang bersemangat untuk memajukan teknologi indonesia dan akan memberikan layanan yang terbaik untuk anda</p>
            <a href="#" class="underline_text">Lihat Lebih Lanjut</a>
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
    <a href="#" class="Visit_link">Lihat Apa Yang Telah Kami Kerjakan</a>
  </div>
@endsection