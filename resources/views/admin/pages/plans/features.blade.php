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
                    <h1 class="m-0">Pricing / Features</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card my-3 show_form" style="">
                        <div class="card-body">
                            <form id="feature_form" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Plan <span class="text-danger">*</span></label>
                                        <select name="plan" id="" class="form-control">
                                            <option value="">-- Select Plan --</option>
                                            @foreach ($plans as $row)
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Feature<span class="text-danger">*</span></label>
                                        <input type="text" name="feature" placeholder="Enter Feature"
                                            class="form-control reset_val">
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-md btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class=" mt-3 set_data">
                    @include('admin.ajaxComponents.features_table')
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
            $("#feature_form").submit(function(e) {
                e.preventDefault();
                let form = new FormData(this)
                $("#feature_form button").attr('disabled', 'disabled');
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.storeFeatures') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message)
                            fetchData()
                            $(".reset_val").val("");
                            $("#feature_form button").removeAttr("disabled");
                        } else {
                            notify(data.status, data.message)
                        }
                    },
                    error: function(error) {
                        $("#feature_form button").removeAttr("disabled");
                        // $(".error").html(error.responseJSON.errors.name[0]).css('color', 'red');
                    }
                });
            });
        });

        // fetch data
        function fetchData() {
            $.ajax({
                type: "get",
                url: "{{ route('admin.indexFeatures') }}",
                success: function(data) {
                    $(".set_data").html(data);
                }
            });
        }

        // delete data
        function featureDelete(id) {
            if (confirm('Are you sure you want to delete this category?')) {
                $.ajax({
                    type: "delete",
                    url: "{{ route('admin.destroyFeatures') }}",
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


        // edit category
        function categoryEdit(id) {
            let input = '.input_' + id;
            let value = '.value_' + id;
            $(input).toggle();
            $(value).toggle();
        }

        $(document).on('keypress', '.update', function(e) {
            if (e.key === 'Enter') {
                event.preventDefault();
                let val = $(this).val();
                let id = $(this).data("id");
                $.ajax({
                    type: "put",
                    url: "{{ route('admin.categoryUpdate') }}",
                    data: {
                        id: id,
                        name: val
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status === "success") {
                            notify(data.status, data.message)
                            fetchData()
                        } else {
                            notify(data.status, data.message)
                            fetchData()
                        }
                    }
                });
            }

        });
    </script>
@endsection
