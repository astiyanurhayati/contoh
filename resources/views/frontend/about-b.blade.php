@extends('layouts.main-b')
@section('title-head', $mainMenu[1]->title)
@section('content')
<!-- agency_heading_start -->
<div class="agency_heading">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="agency_text">
          <h3>We are <span>Design and Development</span> <br>
            Agency based on California</h3>
          <a href="#" target="_blank" class="underline_text">Brows Our Products</a>
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
          <p>Tim kami terdiri dari anak-muda yang bersemangat untuk memajukan teknologi indonesia dan akan memberikan layanan terbaik untuk anda</p>
          <a href="#" class="underline_text">Lihat Lebih Lanjut</a>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- build_product_end -->



<!-- instragram_area_start -->
<div class="instragram_area">

    @foreach ($galery as $item )
    <div class="single_instagram">
        <img src="{{asset('galeryimg/'.$item->gambar)}}" alt="{{$item->desk}}">
        <div class="ovrelay">
        <a href="#">
            <i class="fa fa-instagram"></i>
        </a>
        </div>
    </div>
   @endforeach

</div>
<!-- instragram_area_end -->
<div class="Visit_Work text-center">
  <a href="#" class="Visit_link">Visit Our Work</a>
</div>
@endsection
