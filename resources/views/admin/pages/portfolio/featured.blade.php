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
                    <h1 class="m-0"> Featured </h1>
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
            <div class="card my-3 show_form" style="display:">
                <div class="card-header">
                    Create Portfolio
                </div>
                <div class="card-body">
                    <form id="featured_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label>Featured Portfolio <span class="text-danger">*</span></label>
                                <select name="featured_portfolio" id="" class="form-control">
                                    <option value="">-- select featured portfolio --</option>
                                    @foreach ($portfolio as $row)
                                        <option value="{{ $row->id }}">{{ $row->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label>Index <span class="text-danger">*</span></label>
                                <input type="number" name="index" placeholder="Enter Index" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label>Column Span <span class="text-danger">*</span></label>
                                <select name="column_span" id="" class="form-control">
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-success px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card my-3 set_update">

            </div>
            <div class="mt-3 set_data">
                @include('admin.ajaxComponents.fetured_portfolio_table')
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#add_portfolio").click(function(e) {
                e.preventDefault();
                $(".show_form").toggle();

            });
            // create data
            $("#featured_form").submit(function(e) {
                e.preventDefault();
                $("#featured_form button").attr('disabled', 'disabled');
                let form = new FormData(this)
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.featuredCreate') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message)
                            fetchData()
                            $("#featured_form").trigger('reset');
                            $("#featured_form button").removeAttr("disabled");
                            $(".error").html("");
                        } else {
                            notify(data.status, data.message)
                            $("#featured_form button").removeAttr("disabled");
                        }
                    },
                    error: function(error) {
                        $("#category_form button").removeAttr("disabled");
                        $(".error").html(error.responseJSON.errors.name[0]).css('color', 'red');
                    }
                });
            });
        });

        // fetch data
        function fetchData() {
            $.ajax({
                type: "GET",
                url: "{{ route('admin.featuredManager') }}",
                success: function(data) {
                    console.log(data);
                    $(".set_data").html(data);
                }
            });
        }

        // delete data
        function featuredDestroy(id) {

            if (confirm('Are you sure you want to delete this featured portfolio?')) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.featuredDelete') }}",
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

        // featured update
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
                        notify(data.status, data.message)
                        fetchData()
                    } else {
                        notify(data.status, data.message)
                    }
                }
            });
        }
    </script>
@endsection
