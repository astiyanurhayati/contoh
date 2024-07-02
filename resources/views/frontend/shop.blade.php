@extends('layouts.main')
@section('title-head', "shop")
@section('container')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
    <div class="auto-container">
        <h1>Shop</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{url('/')}}">home</a></li>
            <li>Shop</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="our-shop">
                    <div class="shop-upper-box clearfix">
                        <div class="items-label">Showing all {{count($shops)}} results</div>

                        <form action="{{route('shop.search')}}" method="GET">
                            <div class="orderby">
                                <select class="sortby-select select2-offscreen" name="filter">
                                    <option value="popular"  {{ request()->query('filter') == 'popular' ? 'selected' : '' }}>Sort by popularity</option>
                                    <option value="new"   {{ request()->query('filter') == 'new' ? 'selected' : '' }}>Sort by newness</option>
                                    <option value="low-high"  {{ request()->query('filter') == 'low-high' ? 'selected' : '' }}>Sort by price: low to high</option>
                                    <option value="high-low"   {{ request()->query('filter') == 'high-low' ? 'selected' : '' }}">Sort by price: high to low</option>
                                </select>
                                <button class="btn text-white" type="submit" style="background: #ff91a4">select</button>
                            </div>
                        </form>
                    </div>
                    <div class="row clearfix">
                        @if ($shops->isEmpty())
                        <p>No results found.</p>
                        @else
                        <!-- Shop Item -->
                        @foreach ($shops as $item )
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    @if($item->information != "none")
                                    <div class="sale-tag" style="font-size: 14px;">{{$item->information}}</div>
                                    @endif
                                    <figure class="image"><a href="{{route('detail.shop', $item->slug)}}"><img src="{{asset('shopimg/'.$item->gambar)}}" alt=""></a></figure>
                                    <div class="btn-box"><a href="{{route('detail.shop', $item->slug)}}">Shop Now</a></div>
                                </div>
                                <div class="lower-content">
                                    <h4 class="name"><a href="{{route('detail.shop', $item->slug)}}">{{$item->produk_name}}</a></h4>
                                    <div class="price"><del>Rp{{$item->before_discount}}rb</del>Rp{{ number_format($item->after_discount, 0, ',', '.') }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{$shops->links('pagination::bootstrap-4')}}
                    @endif
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side sticky-container col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar">
                    <div class="sticky-sidebar">
                        <!-- Search Widget -->
                        <div class="sidebar-widget search-widget">
                            <form action="{{route('shop.search')}}" method="GET">
                                <div class="form-group">
                                    <input type="search" name="search" value="{{ request()->query('search') }}" placeholder="Search products…">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <!-- Tags Widget -->
                        <div class="sidebar-widget tags-widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="tag-list clearfix">
                                @foreach ($categoryproduk as $item )
                                <li><a href="#">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
</div><!-- End Page Wrapper -->

@endsection


@section('script')
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/sticky_sidebar.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@endsection
