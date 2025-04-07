@extends('admin.layouts.admin-layout')
@section('title','SEO edit')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">SEO</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card my-3 show_form" style="display:none;">
                <div class="card-header">
                    Create/Update SEO
                </div>
                <div class="card-body">
                    <form id="seo_form" enctype="multipart/form-data">
                        <!-- Hidden ID Field to Distinguish Between Create and Update -->
                        <input type="hidden" name="id" value="">

                        <div class="row">
                            <div class="col-lg-3 mb-3">
                                <label>Select Page <span class="text-danger">*</span></label>
                                <select name="page" class="form-control">
                                    <option value="home">Home</option>
                                    <option value="about_us">About Us</option>
                                    <option value="services">Services</option>
                                    <option value="portfolio">Portfolio</option>
                                    <option value="blog">Blog</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label>Image <span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label>Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="desc"></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label>Keywords <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="keywords"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-success px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection

@section('script_tag')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection

@section('style_tag')
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
