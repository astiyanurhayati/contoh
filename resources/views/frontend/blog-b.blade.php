@extends('layouts.main-b')
@section('title-head', "Blog | Buatinaja")
@section('content')
<!-- agency_heading_start -->
<div class="agency_heading">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="agency_text text-uppercase">
          <h3>blog</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="animated_shape">
    <div class="anim_1">
      <img src="{{asset('asset-b/img/about/1.png')}}" alt="">
    </div>
    <div class="anim_2">
      <img src="{{asset('asset-b/img/about/2.png')}}" alt="">
    </div>
  </div>
</div>
<!-- agency_heading_end -->


<!--================Blog Area =================-->
<section class="blog_area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          @if ($blogs->isEmpty())
          <p>No results found.</p>
          @else
          @foreach ($blogs as $blog )
          <article class="blog_item">
            <div class="blog_item_img">
              <img class="card-img rounded-0" src="{{$blog->gambar}}" alt="{{$blog->judul}}">
              <a href="#" class="blog_item_date">
                <h3>{{$blog->created_at->format('d')}}</h3>
                <p>{{$blog->created_at->format('F')}}</p>
              </a>
            </div>

            <div class="blog_details">
              <a class="d-inline-block" href="{{route('detail.blog', $blog->slug)}}">
                <h2>{{$blog->judul}}</h2>
              </a>
              <p>{{$blog->excerpt}}</p>
              <ul class="blog-info-link">
                <li><a href="#"><i class="fa fa-user"></i>categir</a></li>
              </ul>
            </div>
          </article>
          @endforeach

          @endif
          
          
          {{$blogs->links('pagination::bootstrap-4')}}
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          <aside class="single_sidebar_widget search_widget">
            <form action="{{route('blog.search')}}">
              <div class="form-group">
                <div class="input-group mb-3">
                  <input type="search" name="search" value="{{ request()->query('search') }}" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                  <div class="input-group-append">
                    <button class="btn" type="submit"><i class="ti-search"></i></button>
                  </div>
                </div>
              </div>
              <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
            </form>
          </aside>

          <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Category</h4>
            <ul class="list cat-list">

              @foreach ($categoryblog as $cate )
              <li>
                <a href="#" class="d-flex">
                  <p>{{$cate->name}}</p>
                  <p>({{ $total->where('categoryblog_id',
                                    $cate->id)->first()->total ?? 0 }})</p>
                </a>
              </li>
              @endforeach
              
            </ul>
          </aside>

          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
            
            @foreach ($blogsb as $b )
            <div class="media post_item">
              <img src="{{asset($b->gambar)}}" alt="post" width="100px">
              <div class="media-body">
                <a href="{{route('detail.blog', $b->slug)}}">
                  <h3>{{Str::limit($b->judul, 22)}}</h3>
                </a>
                <p>{{$b->created_at->format('d-F-Y')}}</p>
              </div>
            </div>
            @endforeach
          </aside>
   
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
