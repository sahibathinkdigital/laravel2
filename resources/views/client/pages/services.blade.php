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
    Services
@endsection
@section('content')
    <header class="page-header" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        <div class="container"
            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
            <div class="text-center">
                <h1>Our Services</h1>
            </div>
        </div>
    </header>
    <!-- ==================== Start Services ==================== -->

    <section class="services mt-20">
        <div class="container">

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
                            <h5 class="mb-15" style="
        text-wrap: nowrap;
    ">Digital Marketing</h5>
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
                        <div class="icon mb-40 flex"
                            style="
            align-items: center;
            gap: 19px;
        ">
                            <img src="{{ asset('client/assets/imgs/icon-img/graphicdesign.webp') }}"
                                alt="graphics-design-icon">
                            <h5 class="mb-15" style="
        text-wrap: nowrap;
    ">Graphic design
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
                        <div class="icon mb-40 flex"
                            style="
            align-items: center;
            gap: 19px;
        ">
                            <img src="{{ asset('client/assets/imgs/icon-img/logo-branding.webp') }}"
                                alt="logo-branding-icon">
                            <h5 class="mb-15" style="
        text-wrap: nowrap;
    ">Logo & Branding</h5>
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
                        <div class="icon mb-40 flex"
                            style="
            align-items: center;
            gap: 19px;
        ">
                            <img src="{{ asset('client/assets/imgs/icon-img/app-dev.webp') }}" alt="app-dev-icon">
                            <h5 class="mb-15" style="
        text-wrap: nowrap;
    ">App Development</h5>
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
                        <div class="icon mb-40 flex"
                            style="
            align-items: center;
            gap: 19px;
        ">
                            <img src="{{ asset('client/assets/imgs/icon-img/uiux.webp') }}" alt="uiux-icon">
                            <h5 class="mb-15" style="
        text-wrap: nowrap;
    ">UI/UX Design</h5>
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
                        <div class="icon mb-40 flex"
                            style="
            align-items: center;
            gap: 19px;
        ">
                            <img src="{{ asset('client/assets/imgs/icon-img/photography.webp') }}"
                                alt="photography-icon">
                            <h5 class="mb-15" style="
        text-wrap: nowrap;
    ">Photography</h5>
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
                        <div class="icon mb-40 flex"
                            style="
            align-items: center;
            gap: 19px;
        ">
                            <img src="{{ asset('client/assets/imgs/icon-img/video-shooting.webp') }}"
                                alt="video-shooting-icon">
                            <h5 class="mb-15" style="
        text-wrap: nowrap;
    ">Video Shooting</h5>
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
                        <div class="icon  flex"
                            style="
            align-items: center;
            gap: 19px;
            margin-bottom: 21px;
        ">
                            <img style="
    margin-top: -25px;
"
                                src="{{ asset('client/assets/imgs/icon-img/video-editing.webp') }}"
                                alt="video-editing-icon">
                            <h5 class="mb-15" style="
        text-wrap: nowrap;
        margin-top: 7px;
    ">Video
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

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start process ==================== -->

    <section class="process section-padding">
        <div class="container">
            <div class="sec-head mb-20">
                <h2 class="sub-title fw-600 main-color mb-25">Our Service Process</h2>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                    {{-- <h2 class="fw-600">Business <span class="fw-200">Development</span></h2> --}}
                    <div class="ml-auto desktop-btn">
                        <a href="{{ route('contact') }}" class="go-more">
                            <span class="text ">Hire Our Team</span>
                            <span class="icon ti-arrow-top-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row md-marg">
                <div class="col-lg-3 col-md-6 item md-mb50">
                    <div class="icon-img-60 mb-30">
                        <img src="{{ asset('client/assets/imgs/icon-img/b1.webp') }}" alt="Icon">
                    </div>
                    <h5 class="mb-15">1: Identify Your Needs</h5>
                    <p>Explore our services to find what your brand requires. If you're unsure, we can assist you on a
                        discovery call.</p>

                </div>
                <div class="col-lg-3 col-md-6 item md-mb50">
                    <div class="icon-img-60 mb-30">
                        <img src="{{ asset('client/assets/imgs/icon-img/b2.webp') }}" alt="Icon">
                    </div>
                    <h5 class="mb-15">2: Fill Out the Form</h5>
                    <p>Click on the "Hire Our Team" button & fill the form. Our team connect within 24 hours to schedule a
                        call with you.</p>

                </div>
                <div class="col-lg-3 col-md-6 item sm-mb50">
                    <div class="icon-img-60 mb-30">
                        <img src="{{ asset('client/assets/imgs/icon-img/b3.webp') }}" alt="Icon">
                    </div>
                    <h5 class="mb-15">3: Discovery Call</h5>
                    <p>During the discovery call, we'll discuss your needs and goals to better understand your project.</p>

                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="icon-img-60 mb-30">
                        <img src="{{ asset('client/assets/imgs/icon-img/b4.webp') }}" alt="Icon">
                    </div>
                    <h5 class="mb-15">4: Receive a Proposal</h5>
                    <p>After the call, we will send you a custom proposal that includes pricing and a detailed scope of
                        work.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-bottom mobile-btn mt-40 mobile-btn">
            <a href="{{ route('contact') }}" class="go-more">
                <span class="text ">Hire Our Team</span>
                <span class="icon ti-arrow-top-right"></span>
            </a>
        </div>
    </section>

    <!-- ==================== End process ==================== -->
@endsection

@section('script')
@endsection
