@extends('layouts.blogs')
@section('title-head', $data->judul)
@section('content-blog')
<div class="content-side col-lg-9 col-md-12 col-sm-12">
    <div class="blog-single">

        <!-- News Block -->
        <div class="news-block">
            <div class="inner-box">
                <div class="image-column">
                    <h3 class="text-center"><a href="{{route('detail.blog', $data->slug)}}">{{$data->judul}}</a></h3>
                    <div class="inner-column">
                        <figure class="image mb-3" style="height: 350px; overflow:hidden"><img src="{{$data->gambar}}" width="100%" height="100%" alt="{{$data->judul}}"></figure>
                        <div class="sharethis-inline-share-buttons"></div>
                        <div class="date">{{$data->created_at->format('d')}}<span>{{$data->created_at->format('F')}}</span></div>
                    </div>
                </div>
                {!! $data->body !!}
            </div>
        </div>
    </div>
</div>

@endsection
