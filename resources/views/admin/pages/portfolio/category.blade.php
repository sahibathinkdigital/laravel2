@extends('admin.layouts.admin-layout')
@section('title')
    Category
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Category</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mt-3 set_data">
                        @include('admin.ajaxComponents.category')
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card my-3 show_form" style="">
                        <div class="card-body">
                            <form id="category_form" action="" method="post">
                                <div class="col-lg-12 mb-3">
                                    <label for="">Category <span class="text-danger">*</span></label>
                                    <input type="text" name="name" placeholder="Enter Title" class="form-control">
                                    <p class="error"></p>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-md btn-success form-control">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // create data
            $("#category_form").submit(function(e) {
                e.preventDefault();
                let form = new FormData(this)
                $("#category_form button").attr('disabled', 'disabled');
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.categoryStore') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message)
                            fetchData()
                            $("#category_form").trigger('reset');
                            $("#category_form button").removeAttr("disabled");
                            $(".error").html("");
                        } else {
                            notify(data.status, data.message)
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
                type: "get",
                url: "{{ route('admin.portfolioCategory') }}",
                success: function(data) {
                    $(".set_data").html(data);
                }
            });
        }

        // delete data
        function categoryDelete(id) {
            if (confirm('Are you sure you want to delete this category?')) {
                $.ajax({
                    type: "delete",
                    url: "{{ route('admin.categoryDelete') }}",
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
