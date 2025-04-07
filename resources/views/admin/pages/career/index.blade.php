@extends('admin.layouts.admin-layout')
@section('title')
    Career
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Career</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3 set_data">
                        @include('admin.ajaxComponents.career_table', ['career' => $career])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            function fetchData() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.indexCareer') }}",
                    success: function(data) {
                        $(".set_data").html(data);
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    </script>
@endsection
