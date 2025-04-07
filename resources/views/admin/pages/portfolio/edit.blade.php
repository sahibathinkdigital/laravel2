@extends('admin.layouts.admin-layout')
@section('title')
    Update Portfolio
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <div class="card">
            <div class="card-header">
                <h5>Update Portfolio</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.portfolioUpdate', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6 mb-3 form-group">
                            <label for="">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" placeholder="Enter Title" class="form-control"
                                value="{{ $data->title }}">
                        </div>
                        {{-- <div class="col-lg-6 mb-3">
                            <label for="">Type of <span class="text-danger">*</span></label>
                            <input type="text" name="type_of" placeholder="Enter Title" class="form-control"
                                value="{{ $data->typeof }}">
                        </div> --}}
                        <div class="col-lg-6 mb-3">
                            <label for="">Select Category<span class="text-danger">*</span></label>
                            <select name="category" id="" class="form-control">
                                <option value="">-- Select Category --</option>
                                @if (count($category) > 0)
                                    @foreach ($category as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $data->portfolio_category_id == $row->id ? 'selected' : '' }}>
                                            {{ $row->name }}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="">Data not found</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Upload Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control">
                            @if (!empty($data->image_path))
                                <div class="mt-2">
                                    <img src="{{ asset($data->image_path) }}" alt="Portfolio Image" class="img-thumbnail"
                                        style="max-width: 150px;">
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Link<span class="text-danger">*</span></label>
                            <input type="text" name="link" placeholder="Enter Title" class="form-control"
                                value="{{ $data->website_url }}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-md btn-secondary px-5 me-2 mr-1"
                            onclick="window.location.href='{{ route('admin.portfolio') }}'">Cancel</button>
                        <button type="submit" class="btn btn-md btn-success px-5">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
