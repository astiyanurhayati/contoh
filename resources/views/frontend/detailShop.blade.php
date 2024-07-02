@extends('layouts.main')

@section('title-head', $data->produk_name)
@section('container')

<div class="page-wrapper">

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
        <div class="auto-container">
            <h1>{{$data->produk_name}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li><a href="shop.html">Products</a></li>
                <li>{{$data->produk_name}}</li>
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
                    <div class="shop-single">
                        <!-- Product Detail -->
                        <div class="product-details">
                            <!--Basic Details-->
                            <div class="basic-details">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-12">
                                        <figure class="image"><a href="{{asset('shopimg/'.$data->gambar)}}" class="lightbox-image" title="Image Caption Here"><img src="{{asset('shopimg/'.$data->gambar)}}" alt=""><span class="icon fa fa-search"></span></a></figure>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-12">
                                        <div class="details-header">
                                            <h4>{{$data->produk_name}}</h4>
                                            <div class="item-price">Rp{{ number_format($data->after_discount, 0, ',', '.') }}</div>
                                        </div>
                                        @php
                                        $desc_wa = "Nama Produk: $data->produk_name" . PHP_EOL . "Harga:Rp.$data->after_discount";
                                        @endphp
                                        <div class="other-options clearfix">
                                            <a href="{{ url('https://wa.me/' . $general->wa . '?text=' . urlencode($desc_wa)) }}" target="_blank"> <button type="button" class="theme-btn add-to-cart"><span class="btn-title">Order Now</span></button></a>
                                            <ul class="product-meta">
                                                <li class="posted_in">Category: <a href="#">{{$data->categoryproduk->name}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Basic Details-->

                            <!--Product Info Tabs-->
                            <div class="product-info-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">

                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-details" class="tab-btn active-btn" style="list-style: none">Descripton</li>
                                    </ul>

                                    <!--Tabs Container-->
                                    <div class="tabs-content">

                                        <!--Tab-->
                                        <div class="tab active-tab" id="prod-details">
                                            <h2 class="title">Descripton</h2>
                                            <div class="content">
                                                <p>{{$data->desc}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--End Product Info Tabs-->

                            <!-- Related Products -->
                            <div class="related-products">
                                <div class="sec-title">
                                    <h2>Related products</h2>
                                </div>

                                <div class="row clearfix">

                                    @foreach ($datas as $item )
                                    <!-- Shop Item -->
                                    <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                @if($item->information != "none")
                                                <div class="sale-tag" style="font-size: 15px">{{$item->information}}</div>
                                                @endif
                                                <figure class="image"><a href="{{route('detail.shop', $item->slug)}}"><img src="{{asset('shopimg/'.$item->gambar)}}" alt=""></a></figure>
                                                <div class="btn-box"><a href="{{route('detail.shop', $item->slug)}}">Order Now</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <h4 class="name"><a href="{{route('detail.shop', $item->slug)}}">{{$item->produk_name}}</a></h4>
                                                <div class="price">Rp{{ number_format($item->after_discount, 0, ',', '.') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div><!-- End Related Products -->
                        </div><!-- Product Detail -->
                    </div><!-- End Shop Single -->
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side sticky-container col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar theiaStickySidebar">
                        <div class="sticky-sidebar">
                    
                            <!-- Tags Widget -->
                            <div class="sidebar-widget tags-widget">
                                <h3 class="widget-title">Tags</h3>
                                <ul class="tag-list clearfix">
                                    @php
                                    $labels = explode(',', $data->tag);
                                    @endphp
                                    @foreach($labels as $label)
                                    <li><a href="#">{{trim($label)}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--End Sidebar Page Container-->

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
