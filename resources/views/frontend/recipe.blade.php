@extends('layouts.main')

@section('title-head', "Recipe")
@section('container')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('generalimg/'.$general->breadcrumb)}})">
        <div class="auto-container">
            <h1>{{$subMenu[3]->name}}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">home</a></li>
                <li>{{$subMenu[3]->name}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Recipes Section Two -->
    <section class="recipes-section-two">
        <div class="auto-container">

            <div class="cooked-recipe-search clearfix">
                <div class="browse-recipe">
                    <div class="dropdown">
                        <button class="browse-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Browse</button>
                        <div class="dropdown-menu browse-dropdown" aria-labelledby="dropdownMenuButton">
                            <span class="cooked-title">Categories</span>

                            @foreach ($categories as $category )
                                
                            <a href="#">{{$category->name}}</a> 
                            @endforeach
                          
                        </div>
                    </div>
                </div>

                <!-- Search Recipe Form -->
                <div class="search-recipe-form">
                    <form method="post" action="recipes-list.html">
                        <div class="form-group cooked-sortby-wrap">
                            <select class="sortby-select select2-offscreen" name="cooked_browse_sort_by" tabindex="-1" title="">
                                <option value="date_desc" selected="">Newest first</option>
                                <option value="date_asc">Oldest first</option>
                                <option value="title_asc">Alphabetical (A-Z)</option>
                                <option value="title_desc">Alphabetical (Z-A)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input class="cooked-browse-search" type="text" name="cooked_search_s" placeholder="Find a recipe...">
                        </div>

                        <div class="form-group search-recipe-submit">
                            <button class="theme-btn" type="submit" name="submit-form"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <!-- Recipe Block Two -->

                @foreach ($recipe as $item )
                <div class="recipe-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><a href="{{route('detail.recipe', $item->slug)}}"><img src="{{$item->gambar}}" alt=""></a></figure>
                        <div class="caption-box">
                            <h3 class="recipe-title"><a href="{{route('detail.recipe', $item->slug)}}">{{$item->judul}}</a></h3>
                            <span class="devider"></span>
                            <div class="author">By <strong>admin</strong></div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                {{-- <ul>
                    <li><a href="#"><span class="current">1</span></a></li>
                    <li>   {{$recipe->links('pagination::bootstrap-4')}}</li>
                    <li><a class="next" href="#"><i class="fa fa-chevron-right"></i></a></li>
                    
                </ul> --}}
                {{$recipe->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </section>
    <!-- End Recipes Section Two -->
@endsection

@section('script')
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
@endsection


