@extends('admin.layouts.admin-layout')
@section('title')
    Feature List
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Feature List</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card my-3 ">
                <div class="card-header d-flex justify-content-between align-items-start flex-wrap">
                    {{-- <h5 class="m-0 mb-2 mb-md-0">Feature List</h5> --}}
                    <a href="{{ route('admin.featuredCreate') }}" class="btn btn-md btn-primary px-4">
                        <i class="nav-icon fas fa-plus"></i> Add Feature
                    </a>
                </div>
                <div class="card-body">
                    <!-- Responsive Table Wrapper -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Portfolio</th>
                                    <th>Type</th>
                                    <th>Website Link</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($features as $feature)
                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td>{{ $feature->portfolio->title ?? 'N/A' }}</td>
                                        <td>{{ $feature->typeof }}</td>
                                        <td><!-- Website Link -->
                                            <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                                                data-target="#blogModal{{ $feature->id }}">
                                                Website Link
                                            </a>
                                            <!-- Modal -->
                                            <div id="blogModal{{ $feature->id }}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Website Link</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Optionally, if you want to show the link as is (not masked) when hovered over or clicked, you can add: -->
                                                            <a href="{{ $feature->website_link }}" target="_blank"
                                                                style="text-decoration: underline;">
                                                                {{ $feature->website_link }}
                                                            </a>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($feature->image_path)
                                                <img src="{{ asset($feature->image_path) }}" alt="Feature Image"
                                                    width="100">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start gap-3">
                                                <!-- Edit Button (Green, Circular) -->
                                                <a href="{{ route('admin.featuredEdit', $feature->id) }}"
                                                    class="btn btn-success btn-sm rounded-circle d-flex align-items-center justify-content-center"
                                                    title="Edit" style="width: 35px; height: 35px;margin-right:10px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        fill="white" width="16" height="16">
                                                        <path
                                                            d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0-17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7-14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z">
                                                        </path>
                                                    </svg>
                                                </a>

                                                <!-- Delete Button (Red, Circular) -->
                                                <a href="{{ route('admin.featureDelete', $feature->id) }}"
                                                    class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center"
                                                    title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                                    style="width: 35px; height: 35px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        fill="white" width="16" height="16">
                                                        <path
                                                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
