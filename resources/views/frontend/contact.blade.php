@extends('layouts.main')
@section('title-head', $mainMenu[5]->name)
@section('container')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
    <div class="auto-container">
        <h1>{{$mainMenu[5]->name}}</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{url('/')}}">{{$mainMenu[0]->name}}</a></li>
            <li>{{$mainMenu[5]->name}}</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="contact-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="divider"><img src="images/icons/divider_1.png" alt=""></div>
            <h2>Our Contacts</h2>
            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nisi et dolor ornare pellentesque. Nullam porttitor,<br> odio id facilisis, mauris dolor rhoncus elit, ultricies nulla eros at dui. In suscipit leo sagittis aliquam.</div>
        </div>

        <div class="row clearfix">
            <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="title">
                        <div class="icon"><img src="images/icons/icon-devider-gray.png" alt=""></div>
                        <h4>Opening Hours</h4>
                    </div>

                    <ul class="contact-info" style="list-style: none">
                        @foreach ($opening as $open )

                        <li>{{$open->hari}} <br>{{$open->jam}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12 order-3">
                <div class="inner-column">
                    <div class="title">
                        <div class="icon"><img src="images/icons/icon-devider-gray.png" alt="Contact"></div>
                        <h4>Our Contacts</h4>
                    </div>

                    <ul class="contact-info" style="list-style: none">
                        <li>{{$general->address}}</li>
                        <li><a href="tel:12032842818">{{$general->phone1}}</a><br><a href="tel:12032842919">{{$general->phone2}}</a></li>
                        <li><a href="mailto:{{$general->email1}}">{{$general->email1}}</a><br> <a href="mailto:{{$general->email2}}">{{$general->email2}}</a></li>
                    </ul>
                </div>
            </div>

            <!-- Form Column -->
            <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title">
                        <div class="icon"><img src="images/icons/icon-devider-gray.png" alt=""></div>
                        <h4>Send Message</h4>
                    </div>
                    <div class="contact-form">
                        @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                        @endif

                        <form action="{{route('form.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <div class="response"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="name" class="username" placeholder="Your Name *">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="email" placeholder="Your Email *">
                            </div>

                            <div class="form-group">
                                <textarea name="message" placeholder="Text Message"></textarea>
                            </div>
                            <div class="form-group">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>

                            <div class="form-group">
                                <button class="theme-btn" type="submit" name="submit-form">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section -->

<!-- Map Section -->
<section class="map-section">
    <iframe id="gmap_canvas" src="{{$general->map}}"></iframe>
</section>
<!-- End Map Section -->

<script>
    $('#reload').click(function() {
        $.ajax({
            type: 'GET'
            , url: 'reload-captcha'
            , success: function(data) {
                $(".captcha span").html(data.captcha)
            }
        });
    });

</script>
@endsection
@section('script')
{{-- <script src="{{asset('js/popper.min.js')}}"></script> --}}
{{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@endsection
