 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title-head')</title>
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{asset('plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{asset('plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('generalimg/'.$general->logo1)}}" type="image/x-icon">
    <link rel="icon" href="{{asset('generalimg/'.$general->logo1)}}" type="image/x-icon">
    <!-- Responsive -->

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
    @endif

    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=640196ffb4b9dc0019a9519d&product=inline-share-buttons&source=platform" async="async"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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


    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader_overlay"></div>
            <div class="loader_cogs">
                <div class="loader_cogs__top">
                    <div class="top_part"></div>
                    <div class="top_part"></div>
                    <div class="top_part"></div>
                    <div class="top_hole"></div>
                </div>
                <div class="loader_cogs__left">
                    <div class="left_part"></div>
                    <div class="left_part"></div>
                    <div class="left_part"></div>
                    <div class="left_hole"></div>
                </div>
                <div class="loader_cogs__bottom">
                    <div class="bottom_part"></div>
                    <div class="bottom_part"></div>
                    <div class="bottom_part"></div>
                    <div class="bottom_hole"></div>
                </div>
            </div>
        </div>

        <!-- Main Header-->
        <header class="main-header">
            <!-- Menu Wave -->
            <div class="menu_wave"></div>

            <!-- Main box -->
            <div class="main-box">
                <div class="menu-box">
                    <div class="logo"><a href="{{url('/')}}"><img src="{{asset('generalimg/'.$general->logo1)}}" alt="" title=""></a></div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation menu-left clearfix">
                                    <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{url('/')}}">{{$mainMenu[0]->name}}</a>

                                    </li>
                                    <li class="dropdown  {{ Route::currentRouteNamed('about') ?  "current" : '' }} "><a href="{{route('about')}}">{{$mainMenu[1]->name}}</a>
                                        <ul>

                                            @foreach ($subMenu as $sub )
                                            <li><a href="{{url($sub->url)}}">{{$sub->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li class="dropdown {{ Route::currentRouteNamed('portofolio') ?  "current" : '' }} "><a href="{{route('portofolio')}}">{{$mainMenu[2]->name}}</a>
                                        <ul>
                                            @foreach ($categoryporto as $category )
                                            <li><a href="{{route('portofolio')}}">{{$category->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                </ul>

                                <ul class="navigation menu-right clearfix">
                                    <li class="dropdown {{ Route::currentRouteNamed('blog') ?  "current" : '' }} "><a href="{{route('blog')}}">{{$mainMenu[3]->name}}</a>
                                        <ul>
                                            @foreach ($categoryblog as $category )
                                            <li><a href="{{route('filter.blog', $category->slug)}}">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class=" {{ Route::currentRouteNamed('shop') ?  "current" : '' }} "><a href="{{route('shop')}}">{{$mainMenu[4]->name}}</a>
                                    </li>
                                    <li class="{{ Route::currentRouteNamed('contact') ?  "current" : '' }} "><a href="{{route('contact')}}">{{$mainMenu[5]->name}}</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo">
                        <a href="{{url('/')}}" title="Sticky Logo"><img src="{{asset('generalimg/'.$general->logo2)}}" alt="Sticky Logo"></a>
                    </div>

                    <!--Nav Outer-->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="logo"><a href="index.html"><img src="{{asset('generalimg/'.$general->logo2)}}" alt="" title=""></a></div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{url('/')}}"><img src="{{asset('generalimg/'.$general->logo2)}}" alt="{{$general->logo2}}"></a></div>
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </nav>
            </div><!-- End Mobile Menu -->

            <!-- Header Search -->
            <div class="search-popup">
                <span class="search-back-drop"></span>

                <div class="search-inner">
                    <button class="close-search"><span class="fa fa-times"></span></button>
                    <form method="post" action="blog-showcase.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Header Search -->

        </header>
        <!--End Main Header -->

        @yield('container')


        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="shape_wrapper shape_one">
                <div class="shape_inner" style="background-image: url({{asset('templateimg/'.$template->bg_footer)}});">
                    <div class="overlay"></div>
                </div>
            </div>

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget social-widget">
                                <div class="widget-title">
                                    <h3>Follow Us</h3>
                                    <svg viewBox="0 0 850.4 410.3">
                                        <path d="M351.6,300.8c45.5,20.8,90.4,42.8,136.4,62.5c23,9.8,43.7,15,68.7,16.8c24.2,1.7,26.9-11.4,47.7-17.2 c36.4-10.2,50.6,30.7,12.4,39.4c-47,10.7-90.1,11.7-135.8-5.3c-43.6-16.2-84-40.4-125.5-61.1c-19.3-9.6-41-21.4-63.2-19.4 c-25.3,2.3-48.4,14.1-74.3,15.3c-33.4,1.5-101.6-4.4-107.8-47.3c-8-55.4,62.8-44,94.4-37.5c27.8,5.7,54.3,16.5,81.9,22 c27.9,5.7,49.2-4.2,74.5-15.3c49.2-21.6,108.5-37,152.6-67.4c-73-44.3-144.1-91.2-222.1-126.4c-68.4-30.9-157.2-64-226-12.7 c-11.1,8.3-20.3,19.6-26,32.2c-6.4,14-2.7,29.4-7.8,42.9C27.4,133.4,16,141,4.9,129.5c-10.1-10.4-2-33.4,2.1-44.6 C28.2,27.4,86.9,0.5,145,0c78.1-0.7,153.1,31.3,222.4,64.4c35.5,16.9,70.1,35.7,103.2,56.8c30.6,19.5,61.9,54.4,100.8,39.3 c68.6-26.4,131.4-75.9,210-57.7c57.6,13.4,99.3,84.7,40.5,125.7c-32.5,22.7-74.6,30.1-113.6,30c-42.6-0.1-77.9-19.1-117-32.7 c-41.5-14.4-84.9,10.2-124.1,24.2C448.9,256.6,351.9,281.1,351.6,300.8z M604.7,191.1c24.8,28.8,71.1,34.9,107.4,34.4 c31.8-0.4,94.3-7.9,110.4-41.2c23.9-49.5-49.1-56-77.9-51.8C695.1,139.9,649,169.4,604.7,191.1z M131.1,283.8 c25.5,27.4,91,30.7,122.6,7.1C212.6,263.8,153.1,259.8,131.1,283.8z"></path>
                                    </svg>
                                </div>

                                <!-- Social Icons -->
                                <ul class="social-icon-one">
                                    <li><a href="{{$general->fb}}"><i class="fab fa-facebook-f"></i>
                                            <svg viewBox="0 0 850.4 850.4">
                                                <path class="st0" d="M825.8,466.7L825.8,466.7l3-0.9l-3.3,0.8c-3.9-14.6-7.7-28.4-7.7-41.1c0-13.5,3.9-27.7,7.9-42.8 c5.9-21.9,11.9-44.5,6.1-66.3c-6-22.2-22.6-38.8-38.8-54.8c-11-10.9-21.3-21.2-27.8-32.6c-6.6-11.4-10.3-25.5-14.3-40.5 c-5.8-22.1-11.8-44.9-28-61.1c-15.9-16-38.5-22.1-60.4-27.8c-15-4-29.3-7.8-40.9-14.5c-11-6.4-21-16.5-31.7-27.3 c-16.3-16.4-32.9-33.2-55.7-39.4c-22.7-6.1-45.7,0.2-67.8,6.2c-14.6,3.9-28.4,7.7-41,7.7c-13.5,0-27.7-3.9-42.8-7.9 C366.9,20.3,351,16,335.2,16c-6.4,0-12.7,0.7-19,2.4c-22.2,6-38.7,22.6-54.8,38.8c-10.9,11-21.2,21.3-32.6,27.8 s-25.4,10.3-40.4,14.3c-22.1,5.9-44.8,11.8-61,28.1c-16,16-22,38.5-27.8,60.5c-4,15.1-7.8,29.4-14.5,41 c-6.4,11-16.5,21.1-27.3,31.8c-16.4,16.2-33.2,32.9-39.3,55.8c-6.1,22.7,0.2,45.8,6.2,68c3.9,14.6,7.7,28.4,7.7,41.1 c0,13.5-3.9,27.6-7.9,42.8c-5.9,22-11.9,44.6-6.1,66.4c6,22.2,22.6,38.8,38.8,54.9c11,10.9,21.3,21.2,27.8,32.6 c6.6,11.4,10.3,25.4,14.3,40.4c5.9,22.2,11.8,44.9,28,61.2c16,16,38.5,22.1,60.4,27.8c15.1,4,29.3,7.9,40.9,14.5 c11,6.4,21,16.5,31.7,27.2c16.3,16.4,33,33.3,55.8,39.4c6.3,1.6,12.8,2.5,19.7,2.5c16.1,0,32.3-4.4,48-8.7 c14.7-4,28.5-7.8,41.1-7.8c13.5,0,27.6,3.9,42.7,7.9c22,5.9,44.5,11.9,66.3,6.2c22.2-6,38.7-22.7,54.8-38.9 c10.9-11,21.2-21.3,32.5-27.8c11.4-6.5,25.4-10.3,40.3-14.3c22.2-5.9,44.9-11.9,61.1-28.1c16-15.9,22-38.5,27.8-60.5 c4-15.1,7.9-29.4,14.5-41c6.4-11,16.4-21,27.1-31.7c16.4-16.3,33.5-33,39.6-55.9C838,511.9,835.8,488.9,825.8,466.7z"></path>
                                            </svg></a>
                                    </li>

                                    <li><a href="{{$general->tw}}"><i class="fab fa-twitter"></i>
                                            <svg viewBox="0 0 850.4 850.4">
                                                <path class="st0" d="M825.8,466.7L825.8,466.7l3-0.9l-3.3,0.8c-3.9-14.6-7.7-28.4-7.7-41.1c0-13.5,3.9-27.7,7.9-42.8 c5.9-21.9,11.9-44.5,6.1-66.3c-6-22.2-22.6-38.8-38.8-54.8c-11-10.9-21.3-21.2-27.8-32.6c-6.6-11.4-10.3-25.5-14.3-40.5 c-5.8-22.1-11.8-44.9-28-61.1c-15.9-16-38.5-22.1-60.4-27.8c-15-4-29.3-7.8-40.9-14.5c-11-6.4-21-16.5-31.7-27.3 c-16.3-16.4-32.9-33.2-55.7-39.4c-22.7-6.1-45.7,0.2-67.8,6.2c-14.6,3.9-28.4,7.7-41,7.7c-13.5,0-27.7-3.9-42.8-7.9 C366.9,20.3,351,16,335.2,16c-6.4,0-12.7,0.7-19,2.4c-22.2,6-38.7,22.6-54.8,38.8c-10.9,11-21.2,21.3-32.6,27.8 s-25.4,10.3-40.4,14.3c-22.1,5.9-44.8,11.8-61,28.1c-16,16-22,38.5-27.8,60.5c-4,15.1-7.8,29.4-14.5,41 c-6.4,11-16.5,21.1-27.3,31.8c-16.4,16.2-33.2,32.9-39.3,55.8c-6.1,22.7,0.2,45.8,6.2,68c3.9,14.6,7.7,28.4,7.7,41.1 c0,13.5-3.9,27.6-7.9,42.8c-5.9,22-11.9,44.6-6.1,66.4c6,22.2,22.6,38.8,38.8,54.9c11,10.9,21.3,21.2,27.8,32.6 c6.6,11.4,10.3,25.4,14.3,40.4c5.9,22.2,11.8,44.9,28,61.2c16,16,38.5,22.1,60.4,27.8c15.1,4,29.3,7.9,40.9,14.5 c11,6.4,21,16.5,31.7,27.2c16.3,16.4,33,33.3,55.8,39.4c6.3,1.6,12.8,2.5,19.7,2.5c16.1,0,32.3-4.4,48-8.7 c14.7-4,28.5-7.8,41.1-7.8c13.5,0,27.6,3.9,42.7,7.9c22,5.9,44.5,11.9,66.3,6.2c22.2-6,38.7-22.7,54.8-38.9 c10.9-11,21.2-21.3,32.5-27.8c11.4-6.5,25.4-10.3,40.3-14.3c22.2-5.9,44.9-11.9,61.1-28.1c16-15.9,22-38.5,27.8-60.5 c4-15.1,7.9-29.4,14.5-41c6.4-11,16.4-21,27.1-31.7c16.4-16.3,33.5-33,39.6-55.9C838,511.9,835.8,488.9,825.8,466.7z"></path>
                                            </svg></a>
                                    </li>

                                    <li><a href="{{$general->ig}}"><i class="fab fa-instagram"></i>
                                            <svg viewBox="0 0 850.4 850.4">
                                                <path class="st0" d="M825.8,466.7L825.8,466.7l3-0.9l-3.3,0.8c-3.9-14.6-7.7-28.4-7.7-41.1c0-13.5,3.9-27.7,7.9-42.8 c5.9-21.9,11.9-44.5,6.1-66.3c-6-22.2-22.6-38.8-38.8-54.8c-11-10.9-21.3-21.2-27.8-32.6c-6.6-11.4-10.3-25.5-14.3-40.5 c-5.8-22.1-11.8-44.9-28-61.1c-15.9-16-38.5-22.1-60.4-27.8c-15-4-29.3-7.8-40.9-14.5c-11-6.4-21-16.5-31.7-27.3 c-16.3-16.4-32.9-33.2-55.7-39.4c-22.7-6.1-45.7,0.2-67.8,6.2c-14.6,3.9-28.4,7.7-41,7.7c-13.5,0-27.7-3.9-42.8-7.9 C366.9,20.3,351,16,335.2,16c-6.4,0-12.7,0.7-19,2.4c-22.2,6-38.7,22.6-54.8,38.8c-10.9,11-21.2,21.3-32.6,27.8 s-25.4,10.3-40.4,14.3c-22.1,5.9-44.8,11.8-61,28.1c-16,16-22,38.5-27.8,60.5c-4,15.1-7.8,29.4-14.5,41 c-6.4,11-16.5,21.1-27.3,31.8c-16.4,16.2-33.2,32.9-39.3,55.8c-6.1,22.7,0.2,45.8,6.2,68c3.9,14.6,7.7,28.4,7.7,41.1 c0,13.5-3.9,27.6-7.9,42.8c-5.9,22-11.9,44.6-6.1,66.4c6,22.2,22.6,38.8,38.8,54.9c11,10.9,21.3,21.2,27.8,32.6 c6.6,11.4,10.3,25.4,14.3,40.4c5.9,22.2,11.8,44.9,28,61.2c16,16,38.5,22.1,60.4,27.8c15.1,4,29.3,7.9,40.9,14.5 c11,6.4,21,16.5,31.7,27.2c16.3,16.4,33,33.3,55.8,39.4c6.3,1.6,12.8,2.5,19.7,2.5c16.1,0,32.3-4.4,48-8.7 c14.7-4,28.5-7.8,41.1-7.8c13.5,0,27.6,3.9,42.7,7.9c22,5.9,44.5,11.9,66.3,6.2c22.2-6,38.7-22.7,54.8-38.9 c10.9-11,21.2-21.3,32.5-27.8c11.4-6.5,25.4-10.3,40.3-14.3c22.2-5.9,44.9-11.9,61.1-28.1c16-15.9,22-38.5,27.8-60.5 c4-15.1,7.9-29.4,14.5-41c6.4-11,16.4-21,27.1-31.7c16.4-16.3,33.5-33,39.6-55.9C838,511.9,835.8,488.9,825.8,466.7z"></path>
                                            </svg></a>
                                    </li>

                                    <li><a href="{{$general->yt}}"><i class="fab fa-youtube"></i>
                                            <svg viewBox="0 0 850.4 850.4">
                                                <path class="st0" d="M825.8,466.7L825.8,466.7l3-0.9l-3.3,0.8c-3.9-14.6-7.7-28.4-7.7-41.1c0-13.5,3.9-27.7,7.9-42.8 c5.9-21.9,11.9-44.5,6.1-66.3c-6-22.2-22.6-38.8-38.8-54.8c-11-10.9-21.3-21.2-27.8-32.6c-6.6-11.4-10.3-25.5-14.3-40.5 c-5.8-22.1-11.8-44.9-28-61.1c-15.9-16-38.5-22.1-60.4-27.8c-15-4-29.3-7.8-40.9-14.5c-11-6.4-21-16.5-31.7-27.3 c-16.3-16.4-32.9-33.2-55.7-39.4c-22.7-6.1-45.7,0.2-67.8,6.2c-14.6,3.9-28.4,7.7-41,7.7c-13.5,0-27.7-3.9-42.8-7.9 C366.9,20.3,351,16,335.2,16c-6.4,0-12.7,0.7-19,2.4c-22.2,6-38.7,22.6-54.8,38.8c-10.9,11-21.2,21.3-32.6,27.8 s-25.4,10.3-40.4,14.3c-22.1,5.9-44.8,11.8-61,28.1c-16,16-22,38.5-27.8,60.5c-4,15.1-7.8,29.4-14.5,41 c-6.4,11-16.5,21.1-27.3,31.8c-16.4,16.2-33.2,32.9-39.3,55.8c-6.1,22.7,0.2,45.8,6.2,68c3.9,14.6,7.7,28.4,7.7,41.1 c0,13.5-3.9,27.6-7.9,42.8c-5.9,22-11.9,44.6-6.1,66.4c6,22.2,22.6,38.8,38.8,54.9c11,10.9,21.3,21.2,27.8,32.6 c6.6,11.4,10.3,25.4,14.3,40.4c5.9,22.2,11.8,44.9,28,61.2c16,16,38.5,22.1,60.4,27.8c15.1,4,29.3,7.9,40.9,14.5 c11,6.4,21,16.5,31.7,27.2c16.3,16.4,33,33.3,55.8,39.4c6.3,1.6,12.8,2.5,19.7,2.5c16.1,0,32.3-4.4,48-8.7 c14.7-4,28.5-7.8,41.1-7.8c13.5,0,27.6,3.9,42.7,7.9c22,5.9,44.5,11.9,66.3,6.2c22.2-6,38.7-22.7,54.8-38.9 c10.9-11,21.2-21.3,32.5-27.8c11.4-6.5,25.4-10.3,40.3-14.3c22.2-5.9,44.9-11.9,61.1-28.1c16-15.9,22-38.5,27.8-60.5 c4-15.1,7.9-29.4,14.5-41c6.4-11,16.4-21,27.1-31.7c16.4-16.3,33.5-33,39.6-55.9C838,511.9,835.8,488.9,825.8,466.7z"></path>
                                            </svg></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><img src="{{asset('generalimg/'.$general->logo3)}}" alt=""></figure>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget newslatter-widget">
                                <div class="widget-title">
                                    <h3>Get Our Sweet News</h3>
                                    <svg viewBox="0 0 850.4 410.3">
                                        <path d="M351.6,300.8c45.5,20.8,90.4,42.8,136.4,62.5c23,9.8,43.7,15,68.7,16.8c24.2,1.7,26.9-11.4,47.7-17.2 c36.4-10.2,50.6,30.7,12.4,39.4c-47,10.7-90.1,11.7-135.8-5.3c-43.6-16.2-84-40.4-125.5-61.1c-19.3-9.6-41-21.4-63.2-19.4 c-25.3,2.3-48.4,14.1-74.3,15.3c-33.4,1.5-101.6-4.4-107.8-47.3c-8-55.4,62.8-44,94.4-37.5c27.8,5.7,54.3,16.5,81.9,22 c27.9,5.7,49.2-4.2,74.5-15.3c49.2-21.6,108.5-37,152.6-67.4c-73-44.3-144.1-91.2-222.1-126.4c-68.4-30.9-157.2-64-226-12.7 c-11.1,8.3-20.3,19.6-26,32.2c-6.4,14-2.7,29.4-7.8,42.9C27.4,133.4,16,141,4.9,129.5c-10.1-10.4-2-33.4,2.1-44.6 C28.2,27.4,86.9,0.5,145,0c78.1-0.7,153.1,31.3,222.4,64.4c35.5,16.9,70.1,35.7,103.2,56.8c30.6,19.5,61.9,54.4,100.8,39.3 c68.6-26.4,131.4-75.9,210-57.7c57.6,13.4,99.3,84.7,40.5,125.7c-32.5,22.7-74.6,30.1-113.6,30c-42.6-0.1-77.9-19.1-117-32.7 c-41.5-14.4-84.9,10.2-124.1,24.2C448.9,256.6,351.9,281.1,351.6,300.8z M604.7,191.1c24.8,28.8,71.1,34.9,107.4,34.4 c31.8-0.4,94.3-7.9,110.4-41.2c23.9-49.5-49.1-56-77.9-51.8C695.1,139.9,649,169.4,604.7,191.1z M131.1,283.8 c25.5,27.4,91,30.7,122.6,7.1C212.6,263.8,153.1,259.8,131.1,283.8z"></path>
                                    </svg>
                                </div>

                                <!--Newslatter Form-->
                                <div class="newslatter-form">
                                    <form method="post" action="#" id="subscribe-form">
                                        <div class="form-group">
                                            <div class="response"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="email" value="" placeholder="Your Email Address" required>
                                            <button type="button" id="subscribe-newslatters" class="theme-btn"><span class="flaticon-note"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright-text">
                        <p><a href="{{$general->linkfooter}}">{{$general->footer}}</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div><!-- End Page Wrapper -->

    <div class="whatsapp-float">
        <a href="https://wa.me/{{$general->wa}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg></a>
    </div>

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <svg viewBox="0 0 500 500">
            <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5
        c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1
        c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2
        c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7
        c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6
        c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4
        c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5
        c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4
        c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7
        c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
        </svg>
        <span class="fa fa-angle-up"></span>
    </div>

    @yield('script')
</body>
</html>
