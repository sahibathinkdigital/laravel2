@extends('client.layout.client-layout')
{{-- meta tags --}}
@section('meta')
    <!-- Meta Tags for SEO -->
    <meta name="description" content="{{ $blog->seo_desc }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description" content="{{ $blog->seo_desc }}">
    <meta property="og:image" content="{{ asset($blog->image_path) }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->title }}">
    <meta name="twitter:description" content="{{ $blog->seo_desc }}">
    <meta name="twitter:image" content="{{ asset($blog->image_path) }}">

    <!-- Keywords Meta Tag (Optional) -->
    <meta name="keywords" content="{{ $blog->keywords }}">

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "name": "{{ $blog->title }}",
            "description": "{{ $blog->seo_desc }}"
        }
    </script>
    <style>


@media (max-width: 768px) {
    .background.bg-img {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .author-area .img img, 
    .item .img img, 
    .widget.last-post-thum .img img {
        max-width: 100%; /* Allows the image to scale down on smaller screens */
    }
}

        /* Comment Section Styling */
        .comment {
            display: flex;
            align-items: flex-start;
            margin-bottom: -10px;
        }

        .comment .author-img {
            flex-shrink: 0;
            margin-right: 15px;
        }

        .comment .author-img .circle-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }

        .comment .cont {
            flex-grow: 1;
        }

        .comment .cont h5 {
            margin: 0 0 5px;
            font-size: 20px;
            font-weight: 600;
        }

        .comment .cont p {
            margin: 0;
            font-size: 18px;
            line-height: 1.5;
        }

        /* Hidden comments with transition */
        .hidden {
            opacity: 0;
            height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .comment.revealed {
            opacity: 1;
            height: auto;
            margin-bottom: -10px;
        }

        .center-close-btn {
            display: block;
            margin-top: 10px;
            /* Adjust this value to reduce the top margin */
            margin-bottom: 10px;
            /* Optional: Adjust the bottom margin if necessary */
            text-align: center;
        }

        .comment.revealed {
            opacity: 1;
            height: auto;
            margin-bottom: 20px;
            /* Adjust as needed for spacing between comments */
            margin-top: 15px;
            /* Add spacing above the revealed comment */
        }
    </style>
@endsection
{{-- meta tags --}}
@section('title')
    {{ $blog->title }}
@endsection
@section('content')
    <!-- ==================== Start Slider ==================== -->
    <header class="blog-header section-padding pb-0">
        <div class="container mt-20">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="caption">
                        <!--<div class="sub-title fz-12">-->
                        <!--    <a href="#0"><span>Design , </span></a>-->
                        <!--    <a href="#0"><span>Development</span></a>-->
                        <!--</div>-->
                        <h2 class="mt-30" style="text-align:center;">{{ $blog->title }}</h2>
                        <!--class="fz-55" tag is h1-->
                    </div>
                    <div class="info d-flex mt-40 align-items-center">
                        <div class="left-info">
                            <div class="d-flex align-items-center">
                                <div class="author-info">
                                    <div class="d-flex align-items-center">
                                        <a href="#0" class="circle-60">
                                            <img src="{{ asset('admin/dist/img/td_logo.png') }}" alt="No Image"
                                                class="circle-img">
                                        </a>
                                        <a href="#0" class="ml-20">
                                            <span class="opacity-7">Author</span>
                                            <h6 class="fz-16">Think Digital</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="date ml-50">
                                    <a href="#0">
                                        <span class="opacity-7">Published</span>
                                        <h6 class="fz-16">{{ date('d M Y', strtotime($blog->created_at)) }}</h6>
                                    </a>
                                </div>
                                <div class="date ml-50">
                                    <a href="#0">
                                        <span class="opacity-7">Category</span>
                                        <h6 class="fz-16">{{ $blog->category }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="right-info ml-auto">
                            <div>
                                <span class="pe-7s-comment fz-18 mr-10"></span>
                                <span class="opacity-7">02 Comments</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="background bg-img mt-15" data-background="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}"></div>
    </header>
    <!-- ==================== End Slider ==================== -->
    <!-- ==================== Start Blog ==================== -->
    <section class="blog section-padding">
        <div class="container">
            <div class="row xlg-marg">
                <div class="col-lg-8">
                    <div class="main-post">
                        <div class="item pb-60">
                            <article>
                                <div class="text">
                                    <p>{!! $blog->desc !!}</p>
                                </div>
                            </article>
                            {{-- <div class="mb-50 mt-50">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="iner-img sm-mb30">
                                            <img src="{{ public_path('client/assets/imgs/blog/b2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="iner-img">
                                            <img src="{{ public_path('client/assets/imgs/blog/b3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="title mb-10">
                                <h4>Apple currently sells.</h4>
                            </div> --}}
                        </div>
                        <div class="info-area flex pt-50 bord-thin-top">
                            <div>
                                <div class="tags flex">
                                    <div class="valign">
                                        <span>Category :</span>
                                    </div>
                                    <div>
                                        <a href="blog-classic.html">{{ $blog->category }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="share-icon flex">
                                    <div class="valign">
                                        <span>Share :</span>
                                    </div>
                                    <div>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Comment section start --}}
                        <!-- Comment Section -->
                        @if (count($comments) > 0)
                            <div class="author-area mt-50 bord-thin-bottom">
                                @foreach ($comments as $index => $comment)
                                    <div class="flex comment {{ $index > 0 ? 'hidden' : '' }}">
                                        <div class="author-img mr-30">
                                            <div class="img">
                                                <img src="{{ asset('admin/dist/img/profile.png') }}" alt="Profile Image"
                                                    class="circle-img">
                                            </div>
                                        </div>
                                        <div class="cont valign">
                                            <div class="full-width">
                                                <h5 class="fw-600 mb-10">{{ $comment->name }}</h5>
                                                <p>{{ $comment->message }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- View All Comments Button -->
                                @if (count($comments) > 1)
                                    <div class="btn-bottom mt-80">
                                        <a href="javascript:void(0);" id="view-all-comments" class="go-more">
                                            <span class="text">View All Comments</span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        @endif


                        {{-- End of the comment section --}}
                    </div>
                    <div class="comments-from mt-50">
                        <div class="mb-50">
                            <h3>Leave a comment on the Blog</h3>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class="controls row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_name" type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required></textarea>
                                    </div>
                                    <div class="text-center mt-30 mb-2">
                                        <button type="submit">
                                            <span class="text">Post Comment</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!--<div class="search-box">-->
                        <!--    <input type="text" name="search-post" placeholder="Search">-->
                        <!--    <span class="icon pe-7s-search"></span>-->
                        <!--</div>-->
                       <div class="widget catogry">
                        <h6 class="title-widget">Categories</h6>
                        <ul class="rest">
                            <li><span><a href="{{ url('/category/Website Development') }}">Website Development</a></span></li>
                            <li><span><a href="{{ url('/category/Digital Marketing') }}">Digital Marketing</a></span></li>
                            <li><span><a href="{{ url('/category/Graphics Design & Animation') }}">Graphics Design & Animation</a></span></li>
                            <li><span><a href="{{ url('/category/Logo Design & Branding') }}">Logo Design & Branding</a></span></li>
                            <li><span><a href="{{ url('/category/Mobile App Development') }}">Mobile App Development</a></span></li>
                            <li><span><a href="#">UI/UX Design</a></span></li>
                            <li><span><a href="{{ url('/category/Photography') }}">Photography</a></span></li>
                            <li><span><a href="{{ url('/category/Video Shooting') }}">Video Shooting</a></span></li>
                            <li><span><a href="{{ url('/category/Video Editing & Animation') }}">Video Editing & Animation</a></span></li>
                            <li><span><a href="{{ url('/category/Other') }}">Other</a></span></li>
                        </ul>
                    </div>
                        <div class="widget last-post-thum">
                            <h6 class="title-widget">Recent Posts</h6>
                            @foreach ($recentBlogs as $recent)
                                <div class="item d-flex align-items-center">
                                    <div class="img">
                                        <a href="{{ route('blogdetails', $recent->slug) }}">
                                            <img src="{{ asset($recent->image_path) }}" alt="{{ $recent->title }}">
                                        </a>
                                    </div>
                                    <div class="cont">
                                        <!-- Convert tag/category to uppercase -->
                                        <span class="tag">{{ strtoupper($recent->category) }}</span>
                                        <h6>
                                            <a href="{{ route('blogdetails', $recent->slug) }}">{{ $recent->title }}</a>
                                        </h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="widget tags">
                            <h6 class="title-widget">Tags</h6>
                            <div>
                                <a href="">Development</a>
                                <a href="">Design</a>
                                <a href="">Branding</a>
                                <a href="">Animation</a>
                                <a href="">Animation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== End Blog ========================= -->
@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const viewAllCommentsBtn = document.getElementById('view-all-comments');
            const hiddenComments = document.querySelectorAll('.comment.hidden');
            const commentsContainer = document.querySelector('.author-area');

            if (viewAllCommentsBtn && hiddenComments.length > 0) {
                viewAllCommentsBtn.addEventListener('click', function() {
                    hiddenComments.forEach((comment) => {
                        comment.classList.add('revealed');
                        comment.classList.remove('hidden');
                    });

                    // Hide "View All Comments" button after click
                    viewAllCommentsBtn.style.display = 'none';

                    // Create "Close Comments" button
                    const closeCommentsBtn = document.createElement('a');
                    closeCommentsBtn.href = 'javascript:void(0);';
                    closeCommentsBtn.id = 'close-comments';
                    closeCommentsBtn.classList.add('go-more', 'center-close-btn');
                    closeCommentsBtn.innerHTML = '<span class="text">Close Comments</span>';
                    commentsContainer.appendChild(closeCommentsBtn);

                    // Attach click event for closing comments
                    closeCommentsBtn.addEventListener('click', function() {
                        hiddenComments.forEach((comment) => {
                            comment.classList.remove('revealed');
                            comment.classList.add('hidden');
                        });

                        // Revert back to the original state
                        closeCommentsBtn.remove();
                        viewAllCommentsBtn.style.display = 'block';
                    });
                });
            }
        });
    </script>
@endsection
