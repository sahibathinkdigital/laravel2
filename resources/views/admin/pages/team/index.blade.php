@extends('admin.layouts.admin-layout')
@section('title')
    Our Team
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Team</h1>
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
            <div class="card my-3 show_form" style="display:none ">
                <div class="card-header">
                    Create Team
                </div>
                <div class="card-body">
                    <form id="team_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" placeholder="Enter Title" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="">Designation <span class="text-danger">*</span></label>
                                <input type="text" name="designation" placeholder="Enter Designation"
                                    class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="">Image: <span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="">Social Link: </label>
                                <input type="text" name="social_link" placeholder="Enter Social Link"
                                    class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3 d-flex align-items-center">
                                <div class="flex-grow-1" style="margin-right: 20px;">
                                    <!-- Inline margin for additional space -->
                                    <label for="">LinkedIn Link: <span class="text-danger">*</span></label>
                                    <input type="text" name="linkedin_link" placeholder="Enter LinkedIn Link"
                                        class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-md btn-success px-5"
                                        style="margin-top:28px;">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-3 set_data">
                @include('admin.ajaxComponents.team_table')
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
            $("#team_form").submit(function(e) {
                e.preventDefault();
                $("#team_form button").attr('disabled', 'disabled');
                let form = new FormData(this)
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.teamStore') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message)
                            fetchData()
                            $("#team_form").trigger('reset');
                            $("#team_form button").removeAttr("disabled");
                            $(".error").html("");
                        } else {
                            notify(data.status, data.message)
                            $("#team_form button").removeAttr("disabled");
                        }
                    },
                    error: function(error) {
                        $("#team_form button").removeAttr("disabled");
                        $(".error").html(error.responseJSON.errors.name[0]).css('color', 'red');
                    }
                });
            });
        });

        // fetch data
        function fetchData() {
            $.ajax({
                type: "GET",
                url: "{{ route('admin.team') }}",
                success: function(data) {
                    $(".set_data").html(data);
                }
            });
        }

        // delete data
        function teamDestroy(id) {
            if (confirm('Are you sure you want to delete this blog?')) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.teamDestroy') }}",
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
