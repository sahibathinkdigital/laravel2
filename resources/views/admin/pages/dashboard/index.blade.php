@extends('admin.layouts.admin-layout')
@section('title')
    Dashboard
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
                        {{-- <li class="breadcrumb-item active">Dashboard v3</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>
        /* General layout settings */
        .app-content {
            padding: 20px;
        }

        .container-fluid {
            max-width: 100%;
        }

        /* Small Box Widget */
        .small-box {
            border-radius: 5px;
            color: #fff;
            padding: 20px;
            position: relative;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .small-box .inner {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .small-box h3 {
            font-size: 2rem;
            margin: 0;
            font-weight: bold;
        }

        .small-box p {
            font-size: 1.1rem;
            margin: 0;
        }

        .small-box:hover {
            transform: scale(1.05);
        }

        /* Color backgrounds for each box */
        .small-box.text-bg-primary {
            background-color: #007bff;
        }

        .small-box.text-bg-success {
            background-color: #007bff;
        }

        .small-box.text-bg-warning {
            background-color: #007bff;
            /* Dark text for contrast on yellow background */
        }

        .small-box.text-bg-danger {
            background-color: #007bff;
        }

        /* Icon settings */
        .small-box-icon {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 10px;
            right: 10px;
            opacity: 0.4;
        }

        /* Footer link */
        .small-box-footer {
            display: block;
            color: inherit;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
        }

        .small-box-footer:hover {
            text-decoration: underline;
        }
    </style>
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!--begin::Col-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <a href="{{ route('admin.inquiry') }}" class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ $getTotalInquiries }}</h3>
                            <p>All Enquiry</p>
                        </div>
                    </a>
                </div> <!--end::Small Box Widget 1-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                    <a href="{{ route('admin.indexCareer') }}"class="small-box text-bg-success">

                        <div class="inner">
                            <h3>{{ $getTotalCarrier }}<sup class="fs-5"></sup></h3>
                            <p>Career</p>
                        </div>
                    </a>
                </div> <!--end::Small Box Widget 2-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 3-->
                    <a href="{{ route('admin.indexQuote') }}"class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ $getTotalGetquotes }}</h3>
                            <p>Quotes</p>
                        </div>
                    </a>
                </div> <!--end::Small Box Widget 3-->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 4-->
                    <a href="{{ route('admin.blog') }}" class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>{{ $getClientblog }}</h3>
                            <p>Blog</p>
                        </div>
                    </a>
                </div> <!--end::Small Box Widget 4-->
            </div>
        </div>
    </div>
    <!-- Main content --><!-- /.content -->
@endsection
@section('script')
    <script></script>
@endsection
