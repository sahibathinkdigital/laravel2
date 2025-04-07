@extends('admin.layouts.admin-layout')
@section('title')
    Update Category
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <div class="card">
            <div class="card-header">
                <h5>Update Portfolio</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.categoryUpdate', $category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- Label -->
                        <div class="col-lg-3 mb-3">
                            <label for="">Category <span class="text-danger">*</span></label>
                        </div>

                        <!-- Input -->
                        <div class="col-lg-5 mb-3">
                            <input type="text" name="name" placeholder="Enter Title" class="form-control"
                                value="{{ $category->name }}">
                            <p class="error"></p>
                        </div>
                        <!-- Update Button -->
                        <div class="col-lg-2 mb-3">
                            <button type="submit" class="btn btn-md btn-success form-control">Update</button>
                        </div>
                        <!-- Cancel Button -->
                        <div class="col-lg-2 mb-3">
                            <button type="button" class="btn btn-md btn-secondary px-5 form-control"
                                onclick="window.location.href='{{ route('admin.portfolio') }}'">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
