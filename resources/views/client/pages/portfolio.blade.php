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
    Portfolio
@endsection
@section('content')
    <header class="page-header">
        <div class="container">
            <div class="text-center">
                <h1>Our Portfolio</h1>
            </div>
        </div>
    </header>
    <!-- ==================== Start Portfolio ==================== -->
       <section class="work-minimal">
        <div class="container-xxl">
            <div class="row">
                <!-- filter links -->
                <div class="filtering col-12 text-center">
                    <div class="filter">
                        <span class="text">Filter By :</span>
                        <span data-filter="*" class="active">Show All</span>
                        @foreach ($categories as $category)
                            <span data-filter=".{{ Str::slug($category->name) }}">{{ ucfirst($category->name) }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="gallery row stand-marg">
                @foreach ($categories as $category)
                    <div class="col-12">
                        {{-- <h3>{{ ucfirst($category->name) }}</h3> --}}
                    </div>
                    @php
                        $filteredPortfolios = $portfolios->filter(function ($portfolio) use ($category) {
                            return $portfolio->portfolio_category &&
                                $portfolio->portfolio_category->id === $category->id;
                        });
                    @endphp

                    @forelse ($filteredPortfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 items {{ Str::slug($category->name) }}">
                            <div class="item mt-40">
                                <div class="img">
                                    <img class="rounded-3" src="{{ asset($portfolio->image_path) }}"
                                        alt="{{ $portfolio->title }}">
                                    <div class="cont d-flex align-items-center">
                                        <div>
                                            <h5 class="fz-22">
                                                <a target="_blank"
                                                    href="{{ $portfolio->website_url }}">{{ $portfolio->title }}</a>
                                            </h5>
                                            <p>{{ ucfirst($portfolio->portfolio_category->name ?? 'Uncategorized') }}</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a target="_blank" href="{{ $portfolio->website_url }}"
                                                class="ti-arrow-top-right"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        {{-- <div class="col-12">
                            <p>No items in this category.</p>
                        </div> --}}
                    @endforelse
                @endforeach
            </div>
        </div>
    </section>

    <!-- ==================== End Portfolio ==================== -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Initialize Isotope for portfolio gallery
            var $gallery = $('.gallery').isotope({
                itemSelector: '.items',
                layoutMode: 'fitRows',
                getSortData: {
                    title: '.fz-22 a', // Sort by the portfolio title
                },
                sortAscending: true // Initial order is ascending
            });

            // Filter functionality
            $('.filter span').on('click', function() {
                var filterValue = $(this).attr('data-filter');

                // Determine sorting order
                var sortOrder = filterValue === '*' ? true : false; // Ascending for "Show All", Descending for others

                // Update Isotope with filter and sorting
                $gallery.isotope({
                    filter: filterValue,
                    sortBy: 'title', // Sort by title
                    sortAscending: sortOrder // Set sorting order based on filter
                });

                // Toggle active class for the selected filter
                $('.filter span').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
@endsection

