@extends('client.layout.client-layout')
@section('content')
<header class="page-header" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
    <div class="container"
        style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
        <div class="text-center">
            <h1>Our Blog</h1>
        </div>
    </div>
</header>
<!-- ==================== Start Blog ==================== -->
<section class="blog-crev section-padding">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4">
                    <div class="item sub-bg  blog-card">
                       <div class="img">
                            <a href="{{ route('blogdetails', $blog->slug) }}">
                              <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}"></a>
                              </div>
                        <div class="tags blog-category mt-20 ml-20">
                            <a href="{{ route('blogdetails', $blog->slug) }}">{{ $blog->category }}</a>
                            <!--<a href="{{ route('blogdetails', $blog->slug) }}">Design</a>-->
                        </div>
                        <div class="cont">
                            <div class="date sub-title mb-10 opacity-7">
                                <a
                                    href="{{ route('blogdetails', $blog->slug) }}">{{ date('d M Y', strtotime($blog->created_at)) }}</a>
                            </div>
                            <h5>
                                <a class="blog-title" href="{{ route('blogdetails', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
