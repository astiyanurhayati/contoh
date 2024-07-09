@extends('layouts.main-b')
@section('title-head', $data->judul)

@section('content')
<section class="blog_area single-post-area section-padding">
<div class="container">
  <div class="row">
     <div class="col-lg-8 posts-list">
        <div class="single-post">
           <div class="feature-img">
              <img class="img-fluid" src="{{asset('portofolioimg/'.$data->image)}}" alt="">
           </div>
           <div class="blog_details">
            {!! $data->desk !!}
           </div>
        </div>
       
  
     </div>
     <div class="col-lg-4">
        <div class="blog_right_sidebar">
           
           <aside class="single_sidebar_widget post_category_widget">
              <h4 class="widget_title">Kategori Portofolio</h4>
              <ul class="list cat-list">

                @foreach ($categoryporto as  $cate)
                 <li>
                    <a href="#" class="d-flex">
                       <p>{{$cate->name}}</p>
                    </a>
                 </li>
                 @endforeach
              </ul>
           </aside>
      
        </div>
     </div>
  </div>
</div>
</section>
@endsection