@extends('layouts.main')
@section('container')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
    <div class="auto-container">
        <h1>Our Blog</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{url('/')}}">home</a></li>
            <li>Blog</li>
            @if(request()->is('blog/category/*'))
            <li>@yield('sub-blog')</li>
            @endif
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            @yield('content-blog')
            <!--Sidebar Side-->
            <div class="sidebar-side sticky-container col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar">
                    <div class="sticky-sidebar">
                        @yield('search')

                        <!-- Gallery Widget -->
                        <div class="sidebar-widget gallery-widget">
                            <div class="widget-content">
                                <h3 class="widget-title">Gallery</h3>
                                <div class="instagram-gallery">
                                    <div class="outer-box clearfix">

                                        @foreach ($galery as $item )

                                        <figure class="image"><a href="{{asset('galeryimg/'.$item->gambar)}}" class="lightbox-image" data-fancybox='instagram'><img src="{{asset('galeryimg/'.$item->gambar)}}" alt=""></a></figure>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Category  Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-content">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="categories-list" style="list-style: none">

                                    @foreach ($categoryblog as $category )
                                    <li><a href="{{route('filter.blog', $category->slug)}}">{{$category->name}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <ul class="" style="list-style: none">
                            @foreach ($iklanblogs as $iklan )
                            <div>
                                <p><a href="{{$iklan->link}}" target="_blank">{{$iklan->nama}}</a></p>
                                <img src="{{asset('iklanblogimg/'.$iklan->gambar)}}" class="mb-4" alt="{{$iklan->nama}}">
                            </div>
                            @endforeach

                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!--End Sidebar Page Container-->

@endsection


@section('script')
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/sticky_sidebar.min.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@endsection
