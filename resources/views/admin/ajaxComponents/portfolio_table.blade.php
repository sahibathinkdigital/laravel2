<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Website Link</th>
                <th>Featured</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($portfolios->count() > 0)
                @foreach ($portfolios as $row)
                    <tr>
                        <td><img src="{{ asset($row->image_path) }}" width="100" alt=""></td>
                        <td class="text-capitalize">{{ $row->title }}</td>
                        <td class="text-capitalize">{{ $row->portfolio_category->name }}</td>
                        <td><!-- Website Link -->
                            <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                                data-target="#portModal{{ $row->id }}">
                                Website Link
                            </a>
                            <!-- Modal -->
                            <div id="portModal{{ $row->id }}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Website Link</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Optionally, if you want to show the link as is (not masked) when hovered over or clicked, you can add: -->
                                            <a href="{{ $row->website_url }}" target="_blank"
                                                style="text-decoration: underline;">
                                                {{ $row->website_url }}
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
                        {{-- <td><!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal"
                                data-target="#blogModal{{ $row->id }}">
                                Open Website Link
                            </button>
                            <!-- Modal -->
                            <div id="blogModal{{ $row->id }}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Comment</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $row->website_url }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td> --}}
                        <td>
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" onchange="featured({{ $row->id }})"
                                    class="custom-control-input" @checked($row->featured)
                                    id="customSwitch{{ $row->id }}">
                                <label class="custom-control-label" for="customSwitch{{ $row->id }}"></label>
                            </div>
                        </td>
                        <td class="action__btn">
                            <a class="edit" href="{{ route('admin.portfolioEdit', $row->id) }}"
                                href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                    <path fill="#ffffff"
                                        d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                </svg>
                            </a>
                            <a class="delete" onclick="portfolioDestroy({{ $row->id }})" href="javascript:void(0)"
                                data-toggle="tooltip" data-placement="top" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="17">
                                    <path fill="#ffffff"
                                        d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                </svg>
                            </a>
                        </td>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center">No portfolios found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
