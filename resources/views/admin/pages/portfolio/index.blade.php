@extends('admin.layouts.admin-layout')

@section('title')
    Portfolio
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Portfolio</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <button id="add_portfolio" class="btn btn-md btn-primary px-5"><i class="nav-icon fas fa-plus">
                        Add</i></button>
            </div>

            <div class="card my-3 show_form" style="display: none">
                <div class="card-header">
                    Create Portfolio
                </div>
                <div class="card-body">
                    <form id="portfolio_submit" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" placeholder="Enter Title" class="form-control">
                            </div>
                            {{-- <div class="col-lg-4 mb-3">
                                <label for="">Type of <span class="text-danger">*</span></label>
                                <input type="text" name="type_of" placeholder="Enter Title" class="form-control">
                            </div> --}}
                            <div class="col-lg-6 mb-3">
                                <label for="">Select Category<span class="text-danger">*</span></label>
                                <select name="category" id="" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="">Link<span class="text-danger">*</span></label>
                                <input type="text" name="link" placeholder="Enter Title" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="">Upload Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-success px-5 mr-1">Submit</button>
                            <button type="button" class="btn btn-md btn-secondary px-5 me-2 "
                                onclick="window.location.href='{{ route('admin.portfolio') }}'">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Category Filter Dropdown -->
            <div class="row mb-3">
                <div class="col-lg-4">
                    <label for="category_id_filter">Filter by Category</label>
                    <select id="category_id_filter" class="form-control">
                        <option value="">All Categories</option>
                        @foreach ($categories as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="card mt-3 set_data">
                @include('admin.ajaxComponents.portfolio_table', ['portfolios' => $portfolios])
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Toggle the create portfolio form
            $("#add_portfolio").click(function(e) {
                e.preventDefault();
                $(".show_form").toggle();
            });

            // Create portfolio form submission
            $("#portfolio_submit").submit(function(e) {
                e.preventDefault();
                $("#portfolio_submit button").attr('disabled', 'disabled');
                let form = new FormData(this);
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.portfolioStore') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message);
                            fetchData();
                            $("#portfolio_submit").trigger('reset');
                            $("#portfolio_submit button").removeAttr("disabled");
                            $(".error").html("");
                        } else {
                            notify(data.status, data.message);
                            $("#portfolio_submit button").removeAttr("disabled");
                        }
                    },
                    error: function(error) {
                        $("#category_form button").removeAttr("disabled");
                        $(".error").html(error.responseJSON.errors.name[0]).css('color', 'red');
                    }
                });
            });

            // Filter portfolios by category (AJAX)
            $("#category_id_filter").change(function() {
                var categoryId = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.portfolio') }}",
                    data: {
                        category_id: categoryId
                    },
                    success: function(data) {
                        $(".set_data").html(data);
                    }
                });
            });
        });

        // Fetch data function for AJAX
        function fetchData() {
            $.ajax({
                type: "GET",
                url: "{{ route('admin.portfolio') }}",
                success: function(data) {
                    $(".set_data").html(data);
                }
            });
        }

        // Portfolio deletion
        function portfolioDestroy(id) {
            if (confirm('Are you sure you want to delete this portfolio?')) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.portfolioDestroy') }}",
                    data: {
                        "id": id
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message);
                            fetchData();
                        } else {
                            notify(data.status, data.message);
                        }
                    }
                });
            } else {
                notify('success', 'Delete cancelled');
            }
        }

        // Update featured portfolio
        function featured(id) {
            $.ajax({
                type: "get",
                url: "{{ route('admin.portfolioFeatured') }}",
                data: {
                    "id": id
                },
                dataType: "json",
                success: function(data) {
                    if (data.status === "success") {
                        notify(data.status, data.message);
                        fetchData();
                    } else {
                        notify(data.status, data.message);
                    }
                }
            });
        }
    </script>
@endsection
