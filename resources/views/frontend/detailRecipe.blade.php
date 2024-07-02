@extends('layouts.main')

@section('title-head', $recipe->judul)


@section('container')
 <!--Page Title-->
 <section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
    <div class="auto-container">
        <h1>Recipes List</h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Recipes List</li>
        </ul>
    </div>
</section>
<!--End Page Title-->
<!-- Recipes Section Two -->
<section class="recipes-section-two">
    <div class="auto-container">
        <div class="recipe-single">
            <div class="recipe-block-two">
                <div class="image-box">
                    <figure class="image" style="height: 370px; overflow:hidden"><img src="{{asset('recipeimg/'.$recipe->gambar)}}" width="100%" height="100%" alt=""></figure>
                    <div class="date">21 <span>Dec</span></div>
                </div>
                <div class="lower-content">
                    <ul class="post-info">
                        <li><span class="icon fa fa-user"></span> by admin</li>
                        <li><span class="icon fa fa-heart"></span> 2 Likes</li>
                    </ul>
                    <p>{{$recipe->desk}}</p>
                    <div class="cooked-recipe-info clearfix">
                        <div class="cooked-left">
                            <div class="cooked-author">
                                <figure class="cooked-author-avatar"><img src="https://via.placeholder.com/96x96" alt=""></figure>
                                <strong class="cooked-meta-title">Author</strong>
                                <a href="#">admin</a>
                            </div>
                            <div class="cooked-category">
                                <strong class="cooked-meta-title">Category</strong>
                                <a href="#">{{$recipe->kategori_resep->name}}</a>
                            </div>
                            <div class="cooked-difficulty-level">
                                <strong class="cooked-meta-title">Difficulty</strong>
                                <span class="difficulty">{{$recipe->kesulitan}}</span>
                            </div>
                        </div>

                        <div class="cooked-right">
                            <div class="cooked-print">
                                <a href="#" class="cooked-print-icon"><i class="cooked-icon fa fa-print"></i></a>
                            </div>
                            <div class="cooked-fsm-button"><a href="recipe-fullscreen.html" id="call-btn"><i class="cooked-icon fa fa-expand-arrows-alt"></i></a></div>
                        </div>
                    </div>

                    <div class="cooked-recipe-info clearfix">
                       {!!$recipe->resep!!}
                    </div>

                    
                </div>

                <div class="devider"><img src="{{asset('images/icons/icon-devider-gray.png')}}" alt=""></div>
            </div>

        </div>
    </div>
    
</section>

@endsection

@section('script')
<script src="{{asset('js/jquery.js')}}"></script> 
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery.modal.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@endsection

