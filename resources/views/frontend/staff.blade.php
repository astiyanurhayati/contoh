@extends('layouts.main')
@section('title-head', $subMenu[1]->name)

@section('container')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
        <div class="auto-container">
            <h1>{{$subMenu[1]->name}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">{{$mainMenu[0]->name}}</a></li>
                <li>{{$subMenu[1]->name}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="divider"><img src="images/icons/divider_1.png" alt="divider"></div>
                <h2>{{$staff->judul}}</h2>
                <div class="text">{{$staff->desk}}</div>
            </div>

            <div class="row">

                @foreach ($stafs as $chef )
                    
           
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('staffimg/'.$chef->gambar)}}" alt="{{$chef->nama}}"></figure>
                            <ul class="social-links">
                                <li><a href="{{$chef->fb}}"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="{{$chef->tw}}"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="{{$chef->ig}}"><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3 class="name"><a href="{{route('detail.staff', $chef->slug)}}">{{$chef->nama}}<svg viewBox="0 0 50 15.8" xml:space="preserve"><path d="M9.1,0.9c6.6-0.6,11,3.3,16.6,6.1c5.3,2.6,11.9,4.3,17.7,2.6c2.2-0.7,6.1-2.5,4.8-5.7c-0.4-0.9-1.2-1.8-1.9-1 c-0.7,0.7-0.6,3.7-2.2,1.9C42.6,3,43.7-0.2,46.1,0c2.6,0.3,4.4,3.9,3.8,6.3c-1.5,6.4-10.8,7-15.8,6.3c-3.3-0.5-6.4-1.7-9.4-3.1 c-3-1.4-5.3-3.4-8-5.2C13.8,2.5,11,2.4,7.8,3.2C5.4,3.8,2.2,4.5,1.7,7.5c-0.4,2.7,1.3,5.1,3.7,6.1c1.3,0.5,2.4,0.4,3.6-0.2 c1.2-0.5,2.7-1.9,4-2.1c1.2-0.1,2.3,1.5,1.8,2.7c-0.5,1.1-2.7,1.6-3.7,1.7c-1.4,0.1-3.5-0.3-4.9-0.7c-1.4-0.4-2.7-1.1-3.8-2.2 c-1.7-1.7-2.9-4.6-2.1-7.1C1.2,2.6,6.4,1.9,9.1,0.9z"></path></svg></a></h3>
                            <span class="designation">{{$chef->jabatan}}</span>
                        </div>
                    </div>
                </div>     @endforeach
           
            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Chef Section -->
    <section class="chef-section-two">
        <div class="shape_wrapper shape_one">
            <div class="shape_inner menu_wave" style="background-image: url({{asset('pagestaffimg/'.$staff->bg)}});"><div class="overlay"></div></div>
        </div>

        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">                    
                        <div class="content">
                            <div class="sec-title light text-center">
                                <h2>Alex Doe</h2>
                            </div>
                            <h4>Masterchef</h4>
                            <p>Alex is a Roman-born pastry chef who spent 15 years in his city Rome perfecting his craft and exceptional creations. Vestibulum rhoncus ornare tincidunt. Etiam pretium metus sit amet est aliquet vulputate. Fusce et cursus ligula. Sed accumsan dictum porta. Aliquam rutrum ullamcorper velit hendrerit convallis.</p>
                            <div class="divider"><img src="{{asset('images/icons/icon-devider-light.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image"><img src="{{asset('pagestaffimg/'.$staff->gambar_history)}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Chef Section -->

  

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