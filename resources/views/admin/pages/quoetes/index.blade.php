@extends('admin.layouts.admin-layout')
@section('title')
    Quotes
@endsection
@section('content')
    <style>
        .message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1050;
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
            <div class="message_con"></div>
        </div>
    </div>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Get A Quote</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3 set_data">
                        @include('admin.ajaxComponents.quotes_table', ['quotes' => $quotes])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Fetch data
            function fetchData() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.indexQuote') }}",
                    success: function(data) {
                        $(".set_data").html(data); // Update table data
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            }

            // Show message
            window.showMessage = function(id) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.inquirygetMessage') }}",
                    data: {
                        id: id,
                        for: "quotes"
                    },
                    success: function(data) {
                        if (data.status === "success") {
                            $(".message_con").html(data.inquiry_msg); // Set message content
                            $(".message").addClass('active'); // Show modal
                        } else {
                            alert(data.message);
                        }
                    },
                    error: function(xhr) {
                        console.error("Error fetching message:", xhr.responseText);
                    }
                });
            };

            // Close message modal
            $(".card_header span").on('click', function() {
                $(".message").removeClass('active'); // Hide modal
                $(".message_con").html(""); // Clear content
            });

            // Delete quote
            window.quotesDelete = function(id) {
                if (confirm('Are you sure you want to delete this quote?')) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('admin.destroyQuote') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            if (data.status === "success") {
                                alert(data.message);
                                fetchData();
                            } else {
                                alert(data.message);
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            };
        });
    </script>
@endsection
