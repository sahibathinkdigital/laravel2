@extends('admin.layouts.admin-layout')
@section('title')
    SEO 
@endsection
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
            <div class="d-flex justify-content-end">
                <button id="add_portfolio" class="btn btn-md btn-primary px-5">
                    <i class="nav-icon fas fa-plus"></i> Add
                </button>
            </div>
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
                                <select name="page" class="form-control" required>
                                    <option value="home">Home</option>
                                    <option value="about_us">About Us</option>
                                    <option value="services">Services</option>
                                    <option value="portfolio">Portfolio</option>
                                    <option value="blog">Blog</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label>Image <span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label>Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="desc" required></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label>Keywords <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="keywords" required></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-success px-5 mr-1">Submit</button>
                            <button type="button" class="btn btn-md btn-secondary px-5 me-2 "
                                onclick="window.location.href='{{ route('admin.indexSeo') }}'">Cancel</button>
                        </div>
                        {{-- <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-success px-5">Submit</button>
                        </div> --}}
                    </form>
                </div>
            </div>
            <div class="card mt-3 set_data">
                @include('admin.ajaxComponents.seo_table')
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        // Toggle form visibility
        $("#add_portfolio").click(function(e) {
            e.preventDefault();
            $(".show_form").toggle();
            $("#seo_form").trigger("reset");
            $("#seo_form input[name='id']").val(""); // Clear ID field for new entry
        });

        // Form submission for creating or updating data
        $("#seo_form").submit(function(e) {
            e.preventDefault();
            $("#seo_form button").attr('disabled', true);
            let form = new FormData(this);
            let id = form.get("id");

            // Determine if it’s an update or create request
            let url = id ? `{{ url('admin/seo/update/${id}') }}` : "{{ route('admin.storeSeo') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: form,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#seo_form button").removeAttr("disabled");
                    if (data.status === "success") {
                        notify(data.status, data.message);
                        fetchData();
                        $("#seo_form").trigger('reset');
                        $(".show_form").hide(); // Hide form after successful submit
                    } else {
                        notify(data.status, data.message);
                    }
                },
                error: function(error) {
                    $("#seo_form button").removeAttr("disabled");
                }
            });
        });

        // Fetch updated data
        function fetchData() {
            $.ajax({
                type: "GET",
                url: "{{ route('admin.indexSeo') }}",
                success: function(data) {
                    $(".set_data").html(data);
                }
            });
        }

        // Delete function
        window.seoDestroy = function(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.destroySeo') }}",
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message);
                            fetchData(); // Refresh the data after deletion
                        } else {
                            notify(data.status, data.message);
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); // Log error response
                    }
                });
            }
        };

        // Edit function to populate form with existing data
        window.categoryEdit = function(id) {
            $.ajax({
                type: "GET",
                url: `{{ url('admin/seo/edit/${id}') }}`,
                success: function(response) {
                    if (response.status === "success") {
                        let data = response.data;
                        $("input[name='id']").val(data.id);
                        $("input[name='title']").val(data.title);
                        $("textarea[name='desc']").val(data.desc);
                        $("select[name='page']").val(data.page);
                        $("textarea[name='keywords']").val(data.keywords);
                        $(".show_form").show();
                    } else {
                        notify("error", response.message);
                    }
                }
            });
        };
    });
</script>
@endsection

@section('script_tag')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection

@section('style_tag')
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
