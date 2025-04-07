@extends('admin.layouts.admin-layout')
@section('title')
    Update Team
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <div class="card">
            <div class="card-header">
                <h5>Update Team</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.teamUpdate', $teams->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="">Name: <span class="text-danger">*</span></label>
                            <input type="text" name="name" placeholder="Enter Title" class="form-control"
                                value="{{ $teams->name }}">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Designation: <span class="text-danger">*</span></label>
                            <input type="text" name="designation" class="form-control" value="{{ $teams->designation }}">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Image: <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control">
                            @if (!empty($teams->image_path))
                                <div class="mt-2">
                                    <img src="{{ asset('public/'.$teams->image_path) }}" alt="Portfolio Image" class="img-thumbnail"
                                        style="max-width: 150px;">
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Social Link: </label>
                            <input type="text" name="social_link" class="form-control" value="{{ $teams->social_link }}">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">LinkedIn Link: <span class="text-danger">*</span></label>
                            <input type="text" name="linkedin_link" class="form-control"
                                value="{{ $teams->linkedin_link }}">
                        </div>
                        <div class=" col-lg-6" style="margin-top: 30px;">
                            <button type="submit" class="btn btn-md btn-success px-5">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
