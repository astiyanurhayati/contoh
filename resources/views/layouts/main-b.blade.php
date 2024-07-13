<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title-head')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{asset('generalimg/'.$general->logo1)}}" type="image/x-icon">
  <link rel="icon" href="{{asset('generalimg/'.$general->logo1)}}" type="image/x-icon">

  <!-- CSS here -->
  <link rel="stylesheet" href="{{asset('asset-b/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/gijgo.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/slicknav.css')}}">
  <link rel="stylesheet" href="{{asset('asset-b/css/style.css')}}">

  {{-- SEO --}}
  @if(Route::is('detail.blog'))
  <meta name="keywords" content="{{$data->meta_key}}">
  @else
  <meta name="description" content="{{$general->description}}">
  <meta name="title" content="{{$general->title}}">
  <meta name="keywords" content="{{$general->keywords}}">
  <meta name="searh engine" content="{{$general->searchengine}}">
  <meta name="author" content="{{$general->author}}">
  <meta name="website" content="{{$general->website}}">
  <link rel="canonical" href="https://www.buatinaja.com">

  <meta property="og:title" content="buatinaja - Professional Website Development and UI/UX Design Services">
  <meta property="og:description" content="buatinaja offers professional website development, UI/UX design services, and specialized websites for SMEs (UMKM). Enhance your online presence with our expert solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.buatinaja.com">
  <meta property="og:image" content="https://www.buatinaja.com/images/logo.png">
  <meta name="robots" content="index, follow">
  <meta name="language" content="Indonesian">
  <link rel="alternate" href="https://www.buatinaja.com" hreflang="en">





  @endif


  <style>
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      left: 20px;
      z-index: 9999;
    }

    .whatsapp-float a {
      display: block;
      width: 60px;
      height: 60px;
      background-color: #25d366;
      border-radius: 50%;
      text-align: center;
      color: #fff;
      font-size: 24px;
      line-height: 60px;
      text-decoration: none;
      transition: transform 0.2s;
    }

    .whatsapp-float a:hover {
      transform: scale(1.1);
    }

  

  </style>
</head>

<body>
  <header>
    <div class="header-area ">
      <div id="sticky-header" class="main-header-area">
        <div class="container-fluid p-0">
          <div class="row align-items-center no-gutters">
            <div class="col-xl-2 col-lg-2">
              <div class="logo-img">
                <a href="/">
                  <img src="{{asset('asset-b/img/utils/buatinaja.png')}}" alt="Buatinaja Logo" width="165px" style="margin-left: 60px">
                </a>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7">
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation" >
                    <li><a style="font-size: 1.05em" class="{{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}">{{$mainMenu[0]->name}}</a></li>
                    <li><a style="font-size: 1.05em" class=" {{ Request::is('portofolio') ? 'active' : '' }}" href="{{route('portofolio')}}">{{$mainMenu[2]->name}}</a></li>
                    <li><a style="font-size: 1.05em" class="{{ Request::is('blog') ? 'active' : '' }}" href="{{route('blog')}}">{{$mainMenu[3]->name}}</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
              <div class="log_chat_area d-flex align-items-center">
                <a href="https://wa.me/{{$general->wa}}?text=Halo%2C%20saya%20ingin%20konsultasi%20tentang%20pembuatan%20website%20dan%20design" target="_black" class="say_hi">Konsultasi Sekarang!</a>
              </div>
            </div>
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="whatsapp-float">
    <a href="https://wa.me/{{$general->wa}}?text=Halo%2C%20saya%20ingin%20konsultasi%20tentang%20pembuatan%20website%20dan%20design" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="40" fill="currentColor" class="bi bi-whatsapp mt-2" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
      </svg></a>
  </div>
  <!-- header-end -->
  @yield('content')
  <!-- footer -->
  <footer class="footer">
    {{-- <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="footer_widget">
              <h3 class="footer_title">
                Follow Us
              </h3>
              <ul>
                <li><a href="{{$general->fb}}">Facebook</a></li>
                <li><a href="{{$general->tw}}">Telegram</a></li>
                <li><a href="{{$general->ig}}">Instagram</a></li>
                <li><a href="{{$general->yt}}">Youtube</a></li>

              </ul>

            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="footer_widget">
              <h3 class="footer_title">
                Links
              </h3>
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/portofolio') }}">Portofolio</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
              </ul>

            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="footer_widget">
              <h3 class="footer_title">
                Address
              </h3>
              <p>
                300, A-block, Green lane, USA <br>
                <a target="_blank" href="support@creative.com">support@creative.com</a> <br>
                <a target="_blank" href="+10 672 367 3789">+10 672 367 3789</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="copy-right_text">
      <div class="container">
        <div class="footer_border"></div>
        <div class="row">
          <div class="col-xl-12">
            <p class="copy_right text-center shiny-text">
              Buatinaja since 2024 <i class="fa fa-heart-o" aria-hidden="true"></i>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer -->

  <!-- JS here -->
  <script src="{{asset('asset-b/js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <script src="{{asset('asset-b/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('asset-b/js/popper.min.js')}}"></script>
  <script src="{{asset('asset-b/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset-b/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('asset-b/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('asset-b/js/ajax-form.js')}}"></script>
  <script src="{{asset('asset-b/js/waypoints.min.js')}}"></script>
  <script src="{{asset('asset-b/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('asset-b/js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('asset-b/js/scrollIt.js')}}"></script>
  <script src="{{asset('asset-b/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{asset('asset-b/js/wow.min.js')}}"></script>
  <script src="{{asset('asset-b/js/nice-select.min.js')}}"></script>
  <script src="{{asset('asset-b/js/jquery.slicknav.min.js')}}"></script>
  <script src="{{asset('asset-b/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('asset-b/js/plugins.js')}}"></script>
  <script src="{{asset('asset-b/js/gijgo.min.js')}}"></script>

  <!--contact js-->
  <script src="{{asset('asset-b/js/contact.js')}}"></script>
  <script src="{{asset('asset-b/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('asset-b/js/jquery.form.js')}}"></script>
  <script src="{{asset('asset-b/js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('asset-b/js/mail-script.js')}}"></script>

  <script src="{{asset('asset-b/js/main.js')}}"></script>
</body>

</html>
