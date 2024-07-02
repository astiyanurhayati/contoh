@extends('layouts.blogs')


@if(request()->is('blog/category/*'))
@section('sub-blog', $category->name)
@endif
@section('title-head', "Our Blog")
@section('search')
   <!-- Search -->
   <div class="sidebar-widget search-widget">
    <form action="{{route('blog.search')}}">
        <div class="form-group">
            <input type="search" name="search" value="{{ request()->query('search') }}" placeholder="Search…" >
            <button type="submit"><span class="icon fa fa-search"></span></button>
        </div>
    </form>
</div>
@endsection
@section('content-blog')
<div class="content-side col-lg-9 col-md-12 col-sm-12">
    <div class="blog-sidebar">
        @if ($blogs->isEmpty())
        <p>No results found.</p>
        @else
        @foreach ($blogs as $blog )
        <!-- News Block -->
        <div class="news-block">
            <div class="inner-box">
                <div class="image-column">
                    <div class="inner-column">
                        <figure class="image" style="height: 350px; overflow: hidden"><img src="{{$blog->gambar}}" width="100%" height="100%" alt="{{$blog->judul}}"></figure>
                        <div class="date">{{$blog->created_at->format('d')}} <span>{{$blog->created_at->format('F')}}</span></div>
                    </div>
                </div>
                <div class="content-column">
                    <div class="inner-column">
                        <h3><a href="{{route('detail.blog', $blog->slug)}}">{{$blog->judul}}</a></h3>
                        <ul class="post-info">
                            <li><span class="icon fa fa-user"></span> by admin</li>
                            <li><span class="icon fa fa-bookmark"></span> <a href="#">{{$blog->label}}</a></li>
                        </ul>
                        <div class="text">{{$blog->excerpt}}</div>
                        <div class="devider"><img src="{{asset('images/icons/icon-devider-gray.png')}}" alt="Divider"></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @endif
    </div>
    {{$blogs->links('pagination::bootstrap-4')}}

</div>

@endsection
