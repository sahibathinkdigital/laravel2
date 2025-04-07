@extends('client.layout.client-layout')
{{-- meta tags --}}
@section('meta')
    @if ($seo)
        <!-- Meta Tags for SEO -->
        <meta name="description" content="{{ $seo->desc }}">
        <link rel="canonical" href="{{ url()->current() }}">
        <!-- Open Graph Tags for Social Media Sharing -->
        <meta property="og:title" content="{{ $seo->title }}">
        <meta property="og:description" content="{{ $seo->desc }}">
        <meta property="og:image" content="{{ asset($seo->image) }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo->title }}">
        <meta name="twitter:description" content="{{ $seo->desc }}">
        <meta name="twitter:image" content="{{ asset($seo->image) }}">
        <!-- Keywords Meta Tag (Optional) -->
        <meta name="keywords" content="{{ $seo->keywords }}">
        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "{{ $seo->title }}",
        "description": "{{ $seo->desc }}"
    }
    </script>
    @else
    @endif
@endsection
{{-- meta tags --}}
@section('title')
    Think Digital
@endsection
@section('content')
    <!-- ==================== Start Header ==================== -->
    <header class="digital-header header1">
        <div class="video-main">
            <div class="page1">
                <h1>Digitally Crafted</h1>
                <h2>Brand Experiences</h2>
                <video class="fullscreen video" autoplay muted loop
                    src="{{ asset('client/assets/video/tdpromovideo.webm') }}"></video>
            </div>
        </div>
    </header>
    <header class="crev-portfolio-header mb-10 position-re header2"
        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        <div class="container ontop"
            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
            <div class="row home-container">
                <div class="col-lg-10">
                    <div class="caption">
                        <p style="font-size: 33px;font-weight: 500;color: black;line-height: 1.5;">Digitally Crafted <br>
                            Brand Experiences</p>
                        <div class="row mt-30">
                            <div class="col-lg- valign home-container">
                                <div class="text" style="width: 100%;">

                                    <video style="aspect-ratio: 16/9; width: 100%;" class="fullscreen video" autoplay muted
                                        loop src="{{ asset('client/assets/video/tdpromovideo.webm') }}"></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="marquee pt-30 pb-30 o-hidden">
                <div class="container-fluid">
                    <div class="main-marq md-text text-u">
                        <div class="slide-har st1">
                            <div class="box non-strok">
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>UI-UX Experience</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Web Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Digital Marketing</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Graphics Design</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>logo & Branding</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Mobile App Development</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Photography</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Video Shooting & Editing</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="box non-strok">
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>UI-UX Experience</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Web Development</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Digital Marketing</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Graphics Design</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>logo & Branding</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Mobile App Development</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Photography</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Video Shooting & Editing</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="bg-pattern bg-img opacity-4" data-background="{{ asset('client/assets/imgs/patterns/pattern2.png') }}"
            style="background-image: url(&quot;{{ asset('client/assets/imgs/patterns/pattern2.png') }}&quot;);"></div>
    </header>
    <!-- ==================== End Header ======================== -->
    <!-- ==================== About us start ==================== -->
    <section id="about-us" class="about-us pb-20">
        <div class="container">
            <div class="sec-head mb-20">
                <h2 class="sub-title fw-600 main-color mb-25">About Us</h2>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                    <h2 class="fw-500 about-title ">We are a team of 25+ experts with 9+ years of experience in design,
                        development, and marketing. We genuinely care about your business requirements to find the perfect
                        solution. We specialize in generating profits by building awareness, driving web traffic, connecting
                        with customers, and increasing sales.
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== About us end ====================== -->
    <!-- ==================== Start Services ==================== -->
    <section class="services mt-20">
        <div class="container">
            <div class="sec-head mb-20">
                <h2 class="sub-title fw-600 main-color mb-25">Our Services</h2>
                <div class="pt-25 bord-thin-top d-flex align-items-center">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="item-box radius-15 md-mb40">
                        <div class="icon mb-40 flex " style="align-items: center;gap: 19px;">
                            <img src="{{ asset('client/assets/imgs/icon-img/webdev.webp') }}" alt="web-dev-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;">Web Development</h5>
                        </div>
                        <p>Feeling like your website is stuck in the dial-up era? We build websites for the age of
                            experience.</p>
                        <a href="{{ route('web-development') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-box radius-15 md-mb40">
                        <div class="icon mb-40 flex" style="align-items: center;gap: 19px;">
                            <img src="{{ asset('client/assets/imgs/icon-img/digital-marketing.webp') }}"
                                alt="digital-marketing-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;">Digital Marketing</h5>
                        </div>
                        <p>Feeling overwhelmed by the internet? Can't get people to notice you online? We're your digital
                            compass. </p>
                        <a href="{{ route('digitalmarketing') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-box radius-15">
                        <div class="icon mb-40 flex" style="align-items: center;gap: 19px;">
                            <img src="{{ asset('client/assets/imgs/icon-img/graphicdesign.webp') }}"
                                alt="graphics-design-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;">Graphics design
                            </h5>
                        </div>
                        <p>Brand personality stuck in neutral? We're the creative team, ready to inject some life and
                            ignite your brand's spark into brilliance!
                        </p>
                        <a href="{{ route('graphicsdesign') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="item-box radius-15 md-mb40">
                        <div class="icon mb-40 flex" style="align-items: center;gap: 19px;">
                            <img src="{{ asset('client/assets/imgs/icon-img/logo-branding.webp') }}"
                                alt="logo-branding-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;">Logo & Branding</h5>
                        </div>
                        <p>Brand voice lost in the crowd? We help you find your unique voice.
                        </p>
                        <a href="{{ route('Logo &  Branding') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-box radius-15 md-mb40">
                        <div class="icon mb-40 flex" style="align-items: center;gap: 19px;">
                            <img src="{{ asset('client/assets/imgs/icon-img/app-dev.webp') }}" alt="app-dev-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;">App Development</h5>
                        </div>
                        <p>Are you tired of unengaging apps? We create mobile experiences that keep users engaged.</p>
                        <a href="{{ route('Mobile App Development') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-box radius-15">
                        <div class="icon mb-40 flex" style="align-items: center;gap: 19px;">
                            <img src="{{ asset('client/assets/imgs/icon-img/uiux.webp') }}" alt="uiux-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;">UI/UX Design</h5>
                        </div>
                        <p>Navigation Nightmare? We're your UI/UX escape artists. </p>
                        <a href="{{ route('UI & UX Design') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="item-box radius-15">
                        <div class="icon mb-40 flex" style="align-items: center;gap: 19px;">
                            <img src="{{ asset('client/assets/imgs/icon-img/photography.webp') }}"
                                alt="photography-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;">Photography</h5>
                        </div>
                        <p>Brand visuals feeling stale? Let's speak the language of light together.
                        </p>
                        <a href="{{ route('Photography') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="item-box radius-15">
                        <div class="icon mb-40 flex" style="align-items: center;gap: 19px;">
                            <img src="{{ asset('client/assets/imgs/icon-img/video-shooting.webp') }}"
                                alt="video-shooting-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;">Video Shooting</h5>
                        </div>
                        <p>Need a story that screams "hit play"? We're the magicians of editing.</p>
                        <a href="{{ route('Video Shooting & Editing') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="item-box radius-15">
                        <div class="icon  flex" style="align-items: center;gap: 19px;margin-bottom: 21px;">
                            <img style="margin-top: -25px;"
                                src="{{ asset('client/assets/imgs/icon-img/video-editing.webp') }}"
                                alt="video-editing-icon">
                            <h5 class="mb-15" style="text-wrap: nowrap;margin-top: 7px;">Video
                                Editing & <br> Animation
                            </h5>
                        </div>
                        <p>Our video editing service transforms your raw footage into captivating visual stories.</p>
                        <a href="{{ route('videoediting') }}" class="rmore mt-30">
                            <span class="sub-title">Read More</span>
                            <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}" alt="arrow-right"
                                class="icon-img-20 ml-5">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Services ======================= -->
    <!-- ==================== Start Portfolio ==================== -->
    <section class="portfolio-tab pt-50">
        <div class="container-fluid rest">
            <div class="sec-head">
                <div class="container">
                    <div class="sec-head mb-80">
                        <h2 class="sub-title fw-600 main-color mb-25">Our Projects</h2>
                        <div class="bord pt-25 bord-thin-top mb-30 d-flex align-items-center">
                            <h2 class="fw-600">Our Featured <span class="fw-200">Projects</span></h2>
                        </div>
                        <div class="container">
                            <section class="portfolio-clean pt-0">
                                <div class="container">
                                    <div class="row port-row">
                                        @foreach ($features as $index => $feature)
                                            @if ($index == 0)
                                                <div class="col-lg-5">
                                                    <div class="item mb-30">
                                                        <div class="img p-img">
                                                            <img src="{{ asset($feature->image_path) }}"
                                                                alt="{{ $feature->typeof }}">
                                                            <div class="cont d-flex align-items-center">
                                                                <div>
                                                                    <h5>
                                                                        <a href="{{ $feature->website_link }}"
                                                                            target="_blank">
                                                                            {{ $feature->portfolio->title ?? 'N/A' }}
                                                                        </a>
                                                                    </h5>
                                                                    <p>{{ $feature->typeof }}</p>
                                                                </div>
                                                                <div class="ml-auto">
                                                                    <a href="{{ $feature->website_link }}" class="rmore"
                                                                        target="_blank">
                                                                        <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}"
                                                                            alt="arrow-right" class="icon-img-20">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif ($index == 1)
                                                <div class="col-lg-7">
                                                    <div class="item mb-30">
                                                        <div class="img p-img">
                                                            <img src="{{ asset($feature->image_path) }}"
                                                                alt="{{ $feature->typeof }}">
                                                            <div class="cont d-flex align-items-center">
                                                                <div>
                                                                    <h5>
                                                                        <a href="{{ $feature->website_link }}"
                                                                            target="_blank">
                                                                            {{ $feature->portfolio->title ?? 'N/A' }}
                                                                        </a>
                                                                    </h5>
                                                                    <p>{{ $feature->typeof }}</p>
                                                                </div>
                                                                <div class="ml-auto">
                                                                    <a href="{{ $feature->website_link }}" class="rmore"
                                                                        target="_blank">
                                                                        <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}"
                                                                            alt="arrow-right" class="icon-img-20">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif ($index < 5)
                                                <div class="col-lg-4">
                                                    <div class="item mb-30">
                                                        <div class="img p-img">
                                                            <img src="{{ asset($feature->image_path) }}"
                                                                alt="{{ $feature->typeof }}">
                                                            <div class="cont d-flex align-items-center">
                                                                <div>
                                                                    <h5>
                                                                        <a href="{{ $feature->website_link }}"
                                                                            target="_blank">
                                                                            {{ $feature->portfolio->title ?? 'N/A' }}
                                                                        </a>
                                                                    </h5>
                                                                    <p>{{ $feature->typeof }}</p>
                                                                </div>
                                                                <div class="ml-auto">
                                                                    <a href="{{ $feature->website_link }}" class="rmore"
                                                                        target="_blank">
                                                                        <img src="{{ asset('client/assets/imgs/arrow-right.webp') }}"
                                                                            alt="arrow-right" class="icon-img-20">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="btn-bottom mt-40">
                            <a href="{{ route('portfolio') }}" class="go-more">
                                <span class="text">View all Portfolio</span>
                                <span class="icon ti-arrow-top-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================== End Portfolio ======================== -->
    <!-- ==================== Instagram Feed Page ==================== -->
    {{-- <section class="about-us">
        <div class="container">
            <div class="sec-head mb-80">
                <h2 class="sub-title fw-600 main-color mb-25">Instagram Feed</h2>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                    <h2 class="fw-600">Digital Impressions: <span class="fw-200">Our Visual Story On Instagram</span></h2>
                </div>
                <div id="instagram-feed" style="margin-top: 35px;"></div>
                <div class="button-container">
                    <div id="load-more" class="button"><a>Load More</a></div>
                    <a id="follow-for-more" href="https://www.instagram.com/thinkdigitalindia.in/" target="_blank"
                        class="button" style="display: none; ">Follow for more</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==================== Instagram Feed Page end ==================== -->
    <!-- ==================== Start Blog ==================== -->
    <section class="blog-crev ">
        <div class="container">
            <div class="sec-head mb-20">
                <h2 class="sub-title fw-600 main-color mb-25">Our Blog</h2>
                <div class=" pt-25 bord-thin-top d-flex align-items-center">
                    <h2 class="fw-600">Read Latest <span class="fw-200">Blogs</span></h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="item sub-bg  blog-card">
                            <div class="img">
                                <a href="{{ route('blogdetails', $blog->slug) }}">
                                  <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}"></a>
                            </div>
                            <div class="tags blog-category mt-20 ml-20">
                                <a href="{{ route('blogdetails', $blog->slug) }}">Marketing</a>
                                <a href="{{ route('blogdetails', $blog->slug) }}">Design</a>
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
            <div class="btn-bottom blog-btn">
                <a href="{{ route('blog') }}" class="go-more">
                    <span class="text">View all posts</span>
                    <span class="icon ti-arrow-top-right"></span>
                </a>
            </div>
        </div>
    </section>
    <!-- ==================== End Blog ==================== -->
@endsection

@section('script')
    <script>
        // JavaScript code for header toggling
        function toggleHeaders() {
            var header1 = document.querySelector('.header1');
            var header2 = document.querySelector('.header2');

            if (window.innerWidth >= 991) {
                // Display header1 for desktop
                header1.style.display = 'block';
                header2.style.display = 'none';
            } else {
                // Display header2 for mobile or smaller screens
                header1.style.display = 'none';
                header2.style.display = 'block';
            }
        }

        // Initial call to toggle headers on page load
        toggleHeaders();

        // Event listener for window resize to toggle headers dynamically
        window.addEventListener('resize', function() {
            toggleHeaders();
        });

        // Instagram feed
        // const token =
        //     "IGQWRQTjlMMklTcThuWWVWT0VQQmxkN3N6VHhEY25JVUJ1bUo1dnY1TnRKaUxNZAXJhUkhDcllCbU1IYU94RHJ0Yjl5Tzc1R1ZAqaE1jTU9sRHkwblhTS2x5UkNfOFY1aHVuR0NHdnpQdXlIMlNxTFVvV0tjVlZAfTnMZD";
        // let mediaData = [];
        // let displayedMediaCount = 0;
        // const mediaBatchSize = 4;

        // fetch(`https://graph.instagram.com/me?fields=id,username&access_token=${token}`)
        //     .then(response => response.json())
        //     .then(profileData => {
        //         if (profileData.error) {
        //             throw new Error(profileData.error.message);
        //         }
        //         fetchAndDisplayMedia(profileData.id);
        //     })
        //     .catch(error => console.error("Error fetching profile data:", error));

        // function fetchAndDisplayMedia(userId) {
        //     fetch(
        //             `https://graph.instagram.com/${userId}/media?fields=id,media_type,media_url,permalink&access_token=${token}`
        //         )
        //         .then(response => response.json())
        //         .then(data => {
        //             if (data.error) {
        //                 throw new Error(data.error.message);
        //             }
        //             mediaData = data.data;
        //             displayMediaFeed();
        //         })
        //         .catch(error => console.error("Error fetching media data:", error));
        // }

        // function displayMediaFeed() {
        //     const feedContainer = document.getElementById("instagram-feed");

        //     for (let i = displayedMediaCount; i < displayedMediaCount + mediaBatchSize && i < mediaData.length; i++) {
        //         const media = mediaData[i];
        //         const mediaElement = document.createElement("div");
        //         mediaElement.className = "instagram-media";

        //         let content;
        //         if (media.media_type === "IMAGE" || media.media_type === "CAROUSEL_ALBUM") {
        //             content = `<img src="${media.media_url}" alt="Instagram Image">`;
        //         } else if (media.media_type === "VIDEO") {
        //             content = `
    //         <video>
    //             <source src="${media.media_url}" type="video/mp4">
    //         </video>
    //         <div class="play-icon"></div>`;
        //         }

        //         mediaElement.innerHTML = `<a href="${media.permalink}" target="_blank">${content}</a>`;
        //         feedContainer.appendChild(mediaElement);
        //     }

        //     displayedMediaCount += mediaBatchSize;

        //     if (displayedMediaCount >= mediaData.length) {
        //         document.getElementById("load-more").style.display = "none";
        //     }

        //     if (displayedMediaCount > 4) {
        //         document.getElementById("load-more").style.display = "none";
        //         document.getElementById("follow-for-more").style.display = "block";
        //     } else {
        //         document.getElementById("load-more").style.display = "block";
        //         document.getElementById("follow-for-more").style.display = "none";
        //     }
        // }

        // document.getElementById("load-more").addEventListener("click", displayMediaFeed);
    </script>
@endsection
