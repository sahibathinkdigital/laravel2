@extends('admin.layouts.admin-layout')
@section('title')
    Comments List
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Comments List</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card my-3">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Blog Name</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>
                                        <!-- Trigger the modal with a button -->
                                        <a href="javascript:void(0);" class="text-primary" data-toggle="modal" data-target="#blogModal{{ $comment->id }}">                          Blog Name
                                        </a>
                                        <!--<button type="button" class="btn btn-primary btn-md" data-toggle="modal"-->
                                        <!--    data-target="#blogModal{{ $comment->id }}">-->
                                        <!--    Open Blog Name-->
                                        <!--</button>-->
                                        <!-- Modal -->
                                        <div id="blogModal{{ $comment->id }}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Comment</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{ $comment->blog->title ?? 'N/A' }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td></td> --}}
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->email }}</td>
                                    <td>
                                        <!-- Trigger the modal with a button -->
                                        <!--<button type="button" class="btn btn-primary btn-md" data-toggle="modal"-->
                                        <!--    data-target="#commentModal{{ $comment->id }}">-->
                                        <!--    Open Comment-->
                                        <!--</button>-->
                                          <a href="javascript:void(0);" class="text-primary" data-toggle="modal" data-target="#commentModal{{ $comment->id }}">                          Open Comment
                                        </a>
                                        <!-- Modal -->
                                        <div id="commentModal{{ $comment->id }}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Comment</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{ $comment->message }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $comment->created_at }}</td>
                                    <td class="action__btn">
                                        <a class="delete" href="{{ route('comments.destroy', $comment->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this item?');"
                                            data-toggle="tooltip" data-placement="top" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="17">
                                                <path fill="#ffffff"
                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                            </svg>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination links -->
                    {{ $comments->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
