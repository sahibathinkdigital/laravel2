@extends('admin.layouts.admin-layout')
@section('title')
    Feature Management
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Feature</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card my-3">
                <div class="card-header">
                    <h5 class="m-0">Add Feature</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.featureStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Featured Portfolio <span class="text-danger">*</span></label>
                                <select name="portfolio_id" id="portfolio_id" class="form-control" required>
                                    <option value="" disabled selected>-- Select Featured Portfolio --</option>
                                    @foreach ($portfolios as $portfolio)
                                        <option value="{{ $portfolio->id }}">{{ $portfolio->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="typeof">Category <span class="text-danger">*</span></label>
                                <input type="text" name="typeof" id="typeof" class="form-control" placeholder="Enter the Category"
                                    required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="website_link">Link <span class="text-danger">*</span></label>
                                <input type="url" name="website_link" id="website_link" class="form-control"
                                    placeholder="Website Link">
                            </div>
                            <div class="col-md-6">
                                <label for="image">Feature Image <span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" class="form-control" required>
                            </div>
                        </div>
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('admin.featuredList') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
