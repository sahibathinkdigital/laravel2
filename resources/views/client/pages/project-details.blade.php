@extends('client.layout.client-layout')

@section('title')
    Project Details
@endsection
@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="header-project6 pt-20 pb-20">
        <div class="container-xl">
            <div class="info d-flex align-items-center mb-10">
                <div>
                    <span class="category">Web Developement</span>
                    <span class="category">Design</span>
                </div>

            </div>
            <h1 class="fz-40">TH3 Web Design</h1>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start section ==================== -->

    <section class="section-padding pt-0">
        <div class="container-xl">
            <div class="row lg-marg">
                <div class="col-lg-6">
                    <div class="imgs md-mb40">
                        <div class="mb-30">
                            <img src="{{ asset('client/assets/imgs/portfolio/website/w1.jpg') }}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sticky-item">
                        <div class="text">
                            <h2 class="mb-30">The Challenge</h2>
                            <h5 class="mb-30 line-height-40">The goal is there are many variations of passages of but the
                                majority have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable.</h5>
                        </div>
                        <div class="text">
                            <h2 class="mb-30">The Solution</h2>
                            <h5 class="mb-30 line-height-40">The goal is there are many variations of passages of but the
                                majority have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable.</h5>
                        </div>
                        {{-- <div class="info pt-80 mt-80 bord-thin-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item mb-30">
                                        <span class="opacity-8 mb-5">Category :</span>
                                        <h6>Development</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item mb-30">
                                        <span class="opacity-8 mb-5">Client :</span>
                                        <h6>Envato</h6>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End section ==================== -->
@endsection
