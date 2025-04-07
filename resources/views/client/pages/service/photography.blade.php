@extends('client.layout.client-layout')


@section('title')
    Photography
@endsection
@section('content')
    <!-- ==================== Start Services ==================== -->

    <section class="services-details section-padding">
        <div class="container">
            <div class="sec-head text-center mb-80 desktop-view">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div>
                            <h6 class="sub-title main-color mb-15">Photography</h6>
                            <h4>At Think Digital, we're more than photographers, we're visual storytellers. We craft bespoke
                                photography experiences that capture the essence of your brand, emotions, and products. <br>
                                Our
                                skilled photographers collaborate with you to understand your vision, then meticulously
                                create images that evoke feeling and connection. Our expertise lies in capturing the perfect
                                lighting, composition, and detail to showcase your brand in the best possible light.

                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-head mb-40 mobile-view">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div>
                            <h2 class="sub-title fw-600 main-color mb-25">Photography</h2>
                            <p>At Think Digital, we're more than photographers, we're visual storytellers. We craft bespoke
                                photography experiences that capture the essence of your brand, emotions, and products.
                                Our
                                skilled photographers collaborate with you to understand your vision, then meticulously
                                create images that evoke feeling and connection. Our expertise lies in capturing the perfect
                                lighting, composition, and detail to showcase your brand in the best possible light.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row serv-imgs mt-40">
                <div class="col-lg-4">
                    <div class="img o-hidden radius-15 fit-img md-mb30">
                        <img src="{{ asset('client/assets/imgs/background/Photography/Camera.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="img o-hidden radius-15 desktop-banner">
                        <img src="{{ asset('client/assets/imgs/background/Photography/photography-banner.webp') }}"
                            alt="" data-speed="auto" data-lag="0">
                    </div>
                </div>
            </div>
            <h2 class="mt-5">What we offer: </h2>
            <div class="row mt-20">
                <div class="col-lg-4 mt-10">
                    <ul class="rest list-arrow">
                        <li class="nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Product Photography
                            </h6>
                        </li>
                        <li class="mt-10 nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Portrait Photography</h6>
                        </li>
                        <li class="mt-10 nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Event Photography</h6>
                        </li>
                        <li class="mt-10 nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Real Estate Photography</h6>
                        </li>
                        <li class="mt-10 nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Commercial Photography</h6>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 mt-10">
                    <ul class="rest list-arrow">
                        <li class="nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Lifestyle Photography</h6>
                        </li>
                        <li class="mt-10 nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Food Photography</h6>
                        </li>
                        <li class="mt-10 nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Fashion Photography</h6>
                        </li>
                        <li class="mt-10 nowrap">
                            <span class="icon">
                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                        fill="#14cf93"></path>
                                </svg>
                            </span>
                            <h6 class="inline fw-400">Photo Editing & Retouching</h6>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->
@endsection

@section('script')
@endsection
