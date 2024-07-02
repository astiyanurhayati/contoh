@extends('layouts.main')
@section('title-head', $data->nama)
@section('container')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
        <div class="auto-container">
            <h1>{{$data->nama}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">{{$mainMenu[0]->name}}</a></li>
                <li><a href="{{route('staff')}}">Our Staff</a></li>
                <li>{{$data->nama}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Team Section -->
    <section class="team-single">

        <div class="auto-container">
            <div class="row">
                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('staffimg/'.$data->gambar)}}" alt="{{$data->nama}}"></figure>
                         <ul class="social-links">
                            <li><a href="{{$data->fb}}"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="{{$data->tw}}"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="{{$data->ig}}"><span class="fab fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">                    
                        <div class="content">
                            <h3 class="name">{{$data->nama}}</h3>
                            <span class="designation">{{$data->jabatan}}</span>
                            <p>{{$data->desk}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
@endsection

@section('script')
<script src="{{asset('js/jquery.js')}}"></script> 
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@endsection