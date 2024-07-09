@extends('layouts.main-b')
@section('title-head', $data->judul)
@section('content')
<section class="blog_area single-post-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        <div class="single-post">
          <div class="feature-img">
            <img class="img-fluid" src="{{$data->gambar}}" alt="">
          </div>
          <div class="blog_details">
            {!! $data->body !!}
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          <aside class="single_sidebar_widget search_widget">
            <form action="#">
              <div class="form-group">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                  <div class="input-group-append">
                    <button class="btn" type="button"><i class="ti-search"></i></button>
                  </div>
                </div>
              </div>
              <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
            </form>
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
          <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title">Tag</h4>
            <ul class="list">
              @php
              $labels = explode(',', $data->label);
              @endphp
              @foreach($labels as $label)
              <li>
                <a href="#">{{ trim($label) }}</a>
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
