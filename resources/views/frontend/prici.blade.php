@extends('layouts.main')
@section('title-head', $subMenu[2]->name)
@section('container')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
        <div class="auto-container">
            <h1>{{$subMenu[2]->name}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">{{$mainMenu[0]->name}}</a></li>
                <li>{{$subMenu[2]->name}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="divider"><img src="{{asset('templateimg/'.$template->icon_special)}}" alt=""></div>
                <h2>{{$template->judul_price}}</h2>
                <div class="text">{{$template->desk_price}}</div>

            </div>
    
            <div class="row">
    
                @foreach ($price as $item )
    
                @if($item->information == "best")
                <!-- Pricing Table -->
                <div class="pricing-table tagged col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <!-- Pricing Highlight -->
                        <div class="pricing-highlight">
                            <svg viewBox="0 0 67.3 67.3">
                                <path class="st0" d="M40.7,2.8c0.4,0,0.7,0,1.1,0.1c1.3,0.4,2.4,1.5,3.6,2.6c0.9,1,1.9,1.8,3,2.5c1.2,0.6,2.5,1.1,3.8,1.4 c1.6,0.4,3.1,0.8,4,1.7s1.3,2.4,1.7,4c0.3,1.3,0.7,2.5,1.3,3.7c0.7,1.1,1.6,2.1,2.6,3c1.2,1.2,2.3,2.2,2.6,3.5 c0.3,1.3-0.1,2.7-0.5,4.3c-0.4,1.3-0.6,2.6-0.7,3.9c0.1,1.2,0.3,2.5,0.6,3.7v0.1v0.1l0,0l0.5,1.9h0.1c0.2,0.9,0.1,1.7-0.1,2.6 c-0.3,1.3-1.4,2.4-2.6,3.6l0,0c-1,0.9-1.8,1.9-2.5,3c-0.6,1.2-1.1,2.5-1.4,3.8c-0.4,1.6-0.8,3.1-1.7,4s-2.5,1.2-4.1,1.7 c-1.3,0.3-2.5,0.7-3.7,1.3c-1.1,0.7-2.1,1.6-3,2.6c-1.2,1.2-2.2,2.3-3.5,2.6c-0.3,0.1-0.7,0.1-1,0.1c-1.1-0.1-2.2-0.3-3.3-0.6 c-1.3-0.4-2.6-0.6-3.9-0.7c-1.3,0.1-2.6,0.3-3.8,0.7c-1.1,0.3-2.2,0.6-3.3,0.6c-0.4,0-0.7,0-1.1-0.1c-1.3-0.4-2.4-1.5-3.6-2.6 c-0.9-1-1.9-1.8-3-2.5c-1.2-0.6-2.5-1.1-3.8-1.4c-1.6-0.4-3-0.8-4-1.7c-0.9-0.9-1.3-2.4-1.8-4c-0.3-1.3-0.7-2.5-1.3-3.7 c-0.7-1.1-1.6-2.1-2.6-3c-1.2-1.2-2.3-2.2-2.6-3.5s0.1-2.7,0.5-4.3c0.4-1.3,0.6-2.6,0.7-4c-0.1-1.3-0.3-2.6-0.7-3.8 c-0.4-1.6-0.8-3.1-0.5-4.4c0.4-1.3,1.5-2.4,2.6-3.6c1-0.9,1.8-1.9,2.5-3c0.6-1.2,1.1-2.5,1.4-3.8c0.4-1.6,0.8-3.1,1.7-4 s2.4-1.2,4-1.7c1.3-0.3,2.5-0.7,3.7-1.3c1.1-0.7,2.1-1.6,3-2.6c1.2-1.2,2.3-2.3,3.5-2.6c0.3-0.1,0.7-0.1,1-0.1 c1.1,0.1,2.2,0.3,3.3,0.6c1.3,0.4,2.6,0.6,4,0.7c1.3-0.1,2.6-0.3,3.8-0.7C38.5,3,39.6,2.8,40.7,2.8L40.7,2.8"></path>
                            </svg>
                            <h5>Best</h5>
                        </div>
    
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('priceimg/'.$item->gambar)}}" alt=""></figure>
                        </div>
                        <div class="pricing-svg">
                            <svg viewBox="0 0 1000 690">
                                <path class="st0" d="M1503-747c-669.3,0-1338.7,0-2008,0c0.3,425,0.7,850,1,1275c0,7.7,0,15.3,0,23c168.3,0.1,336.7,0.3,505,0.4 c18.1-10.6,32.9-15.9,58.4-10.8c80.7,16.2,160.7,100.3,240.4,93.8c93-7.5,184.6-116.6,284.6-96c88.9,18.3,101.9,175.6,227.2,147.5 c79.9-17.9,68.2-118.2,149.1-138.7c12.8-3.3,20.2-4.2,38.4-3.4c167.7,0.7,335.3,1.5,503,2.2c0.3-6,0.7-12,1-18 C1503,103,1503-322,1503-747z"></path>
                            </svg>
                        </div>
                        <div class="title-box">
                            <h3>{{$item->nama}}</h3>
                        </div>
                        <div class="price-box">
                            <div class="price">{{$item->price}}</div>
                            <span class="title">{{$item->portion}}</span>
                        </div>
                        <div class="table-content">
                            <ul>
                                @foreach ((array)json_decode($item->desc) as $data)
                                <li style="list-style: none"><span>{{$data}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="theme-btn btn-style-two regular"><span></span>Order Now<span></span></a>
                        </div>
                    </div>
                </div>
                @else
                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('priceimg/'.$item->gambar)}}" alt=""></figure>
                        </div>
                        <div class="pricing-svg">
                            <svg viewBox="0 0 1000 690">
                                <path class="st0" d="M1503-747c-669.3,0-1338.7,0-2008,0c0.3,425,0.7,850,1,1275c0,7.7,0,15.3,0,23c168.3,0.1,336.7,0.3,505,0.4 c18.1-10.6,32.9-15.9,58.4-10.8c80.7,16.2,160.7,100.3,240.4,93.8c93-7.5,184.6-116.6,284.6-96c88.9,18.3,101.9,175.6,227.2,147.5 c79.9-17.9,68.2-118.2,149.1-138.7c12.8-3.3,20.2-4.2,38.4-3.4c167.7,0.7,335.3,1.5,503,2.2c0.3-6,0.7-12,1-18 C1503,103,1503-322,1503-747z"></path>
                            </svg>
                        </div>
                        <div class="title-box">
                            <h3>{{$item->nama}}</h3>
                        </div>
                        <div class="price-box">
                            <div class="price">{{$item->price}}</div>
                            <span class="title">{{$item->portion}}</span>
                        </div>
                        <div class="table-content">
                            <ul>
                                @foreach ((array)json_decode($item->desc) as $data)
                                <li style="list-style: none"><span>{{$data}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="theme-btn btn-style-two regular"><span></span>Order Now<span></span></a>
                        </div>
                    </div>
                </div>
    
                @endif
                @endforeach
    
    
            </div>
        </div>
    </section>
    <!--End Pricing Section -->

</div><!-- End Page Wrapper -->

@endsection
@section('script')
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
@endsection
