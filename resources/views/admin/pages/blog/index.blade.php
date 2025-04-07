@extends('admin.layouts.admin-layout')
@section('title')
    Blog 
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blog</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <button id="add_portfolio" class="btn btn-md btn-primary px-5"><i
                        class="nav-icon fas fa-plus">Add</i></button>
            </div>
            <div class="card my-3 show_form" style="display: ">
                <div class="card-header">
                    Create Blog
                </div>
                <div class="card-body">
                    <form id="blog_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" placeholder="Enter Title" class="form-control">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label for="">Category <span class="text-danger">*</span></label>
                                <select name="category" id="" class="form-control  text-capitalize">
                                    <option value="">Select category</option>
                                    <option value="Website Development">Website Development</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Graphics Design & Animation">Graphics Design & Animation</option>
                                    <option value="Logo Design & Branding">Logo Design & Branding</option>
                                    <option value="Mobile App Development">Mobile App Development</option>                                   
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Photography">Photography</option>
                                    <option value="Video Shooting">Video Shooting</option>
                                    <option value="Video Editing & Animation">Video Editing & Animation</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label for=""> Blog Image <span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="">Description<span class="text-danger">*</span></label>
                                <textarea id="summernote" name="desc"></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="">Description for SEO<span class="text-danger">*</span></label>
                                <textarea name="seo_desc" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="">Keywords<span class="text-danger">*</span></label>
                                <textarea name="keywords" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-success px-5 mr-1">Submit</button>
                            <button type="button" class="btn btn-md btn-secondary px-5 me-2 "
                                onclick="window.location.href='{{ route('admin.blog') }}'">Cancel</button>
                        </div>
                        {{-- <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-success px-5">Submit</button>
                        </div> --}}
                    </form>
                </div>
            </div>
            <div class="card mt-3 set_data">
                @include('admin.ajaxComponents.blog_table')
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
@section('script')
    <script>
        // Initialize Summernote with custom configuration
      $('#summernote').summernote({
    height: 200,
    toolbar: [
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['fontname', 'fontsize', 'strikethrough', 'superscript', 'subscript']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
    ],
    fontNames: ['Arial', 'Satoshi', 'Arial Black','Times New Roman','Calibri', 'Cambria', 'Impact', 'Tahoma', 'Bookman', 'Satoshi-Variable'],
    fontSizes: ['8', '10', '12', '14', '16', '18', '20', '22', '24', '28', '32', '36'],
    styleTags: ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6']
});
        $(document).ready(function() {
            $("#add_portfolio").click(function(e) {
                e.preventDefault();
                $(".show_form").toggle();

            });
            // create data
            $("#blog_form").submit(function(e) {
                e.preventDefault();
                $("#blog_form button").attr('disabled', 'disabled');
                let form = new FormData(this)
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.blogStore') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message)
                            fetchData()
                            $("#blog_form").trigger('reset');
                            $("#blog_form button").removeAttr("disabled");
                            $(".error").html("");
                        } else {
                            notify(data.status, data.message)
                            $("#blog_form button").removeAttr("disabled");
                        }
                    },
                    error: function(error) {
                        $("#blog_form button").removeAttr("disabled");
                        $(".error").html(error.responseJSON.errors.name[0]).css('color', 'red');
                    }
                });
            });
        });

        // fetch data
        function fetchData() {
            $.ajax({
                type: "GET",
                url: "{{ route('admin.blog') }}",
                success: function(data) {
                    console.log(data);
                    $(".set_data").html(data);
                }
            });
        }
        // update
        function editBlog(id) {
            $.ajax({
                url: '/admin/blog/' + id + '/edit', // Ensure the ID is part of the URL
                type: 'GET',
                success: function(response) {
                    // Populate the form fields with the returned data
                    $('#blogForm input[name="title"]').val(response.title);
                    $('#blogForm select[name="category"]').val(response.category);
                    $('#blogForm textarea[name="desc"]').val(response.desc);
                    $('#blogForm textarea[name="seo_desc"]').val(response.seo_desc);
                    $('#blogForm textarea[name="keywords"]').val(response.keywords);

                    // Show the modal for editing
                    $('#editModal').modal('show');
                },
                error: function(error) {
                    console.error("Error fetching blog data:", error);
                }
            });
        }
        // delete data
        function blogDestroy(id) {

            if (confirm('Are you sure you want to delete this blog?')) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.blogDestroy') }}",
                    data: {
                        "id": id
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message)
                            fetchData()
                        } else {
                            notify(data.status, data.message)
                        }

                    }

                });
            } else {
                notify('success', 'delete cancelling success')
            }
        }
    </script>
@endsection
@section('script_tag')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection
@section('style_tag')
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <style>
    body {
    font-family: 'Satoshi', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Satoshi', sans-serif;
}

.note-editable {
    font-family: 'Satoshi', sans-serif !important;
}
    </style>
@endsection
