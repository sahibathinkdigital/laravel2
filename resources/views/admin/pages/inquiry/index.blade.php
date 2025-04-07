@extends('admin.layouts.admin-layout')

@section('title')
    Contact Us
@endsection

@section('content')
    <style>
        .message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1050;
            /* Ensure this is higher than the navbar's z-index */
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 90%;
            padding: 20px;
            border-radius: 8px;
            display: none;
        }

        .message.active {
            display: block;
        }
    </style>
    <div class="message">
        <div class="card_header">Message <span>X</span></div>
        <div class="card_body">
            <div class="message_con">

            </div>
        </div>
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3 set_data">
                        @include('admin.ajaxComponents.inquiry_table', ['inquiry' => $inquiry])
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        function fetchData() {
            $.ajax({
                type: "GET",
                url: "{{ route('admin.inquiry') }}",
                success: function(data) {
                    $(".set_data").html(data);
                },
                error: function(error) {
                    console.error("Error fetching data:", error);
                }
            });
        }

        function inquiryDelete(id) {
            if (confirm('Are you sure you want to delete this inquiry?')) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('admin.inquiryDestroy') }}",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status === "success") {
                            alert(data.message);
                            fetchData();
                        } else {
                            alert(data.message);
                        }
                    },
                    error: function(error) {
                        console.error("Error deleting data:", error);
                    }
                });
            }
        }

        // show message
        function showMessage(id) {
            $.ajax({
                type: "GET",
                url: "{{ route('admin.inquirygetMessage') }}",
                data: {
                    id: id,
                    for: "inquiry"
                },
                dataType: "json",
                success: function(data) {
                    if (data.status === "success") {
                        // Load the message content into the modal body
                        $(".message_con").html(data.inquiry_msg);

                        // Show the modal
                        $("#messageModal").modal("show");
                    } else {
                        alert(data.message);
                    }
                },
                error: function(error) {
                    console.error("Error fetching message:", error);
                    alert("An error occurred. Please try again.");
                }
            });
        }



        // close message
        $(".card_header span").click(function(e) {
            e.preventDefault();
            $(".message").removeClass('active');
            $(".message_con").html("");
        });
    </script>
@endsection
