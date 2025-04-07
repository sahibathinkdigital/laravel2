<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>SEO Description</th>
                <th>Keywords</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $row)
                <tr>
                    <td><img src="{{ asset($row->image_path) }}" width="200" alt=""></td>
                    <td class="text-capitalize">{{ $row->title }}</td>
                    <td class="text-capitalize">{{ $row->category }}</td>
                    <td class="text-capitalize">
                        <!-- Trigger Modal -->
                        <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                            data-target="#descModal{{ $row->id }}">
                            Description
                        </a>
                        <!-- Modal -->
                        <div id="descModal{{ $row->id }}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Description</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>{!! $row->desc !!}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    {{-- <td class="text-capitalize">
                        {{ Str::limit($row->desc, 100) }}                        
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                            data-target="#descModal{{ $row->id }}">
                            View More
                        </button>
                    </td> --}}
                    <td class="text-capitalize">
                        <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                            data-target="#blogModal{{ $row->id }}">
                            SEO Description
                        </a>
                        {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#blogModal{{ $row->id }}">
                            Open SEO
                        </button> --}}
                        <!-- Modal -->
                        <div id="blogModal{{ $row->id }}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">SEO Description</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ $row->seo_desc }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-capitalize">
                        <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                            data-target="#bgModal{{ $row->id }}">
                            Keyword
                        </a>
                        {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#blogModal{{ $row->id }}">
                            Open Keywords
                        </button> --}}
                        <!-- Modal -->
                        <div id="bgModal{{ $row->id }}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Keywords</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ $row->keywords }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="action__btn">
                        <a class="edit" href="{{ route('admin.blog.edit', $row->id) }}" data-toggle="tooltip"
                            href="javascript:void(0)" data-placement="top" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                <path fill="#ffffff"
                                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                            </svg>
                        </a>
                        <a class="delete" onclick="blogDestroy({{ $row->id }})"
                            href="javascript:void(0)"data-toggle="tooltip" data-placement="top" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="17">
                                <path fill="#ffffff"
                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </a>
                    </td>
                </tr>

                <!-- Modal for Large Description -->
                <div class="modal fade" id="descModal{{ $row->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="descModalLabel{{ $row->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="descModalLabel{{ $row->id }}"> Description</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Display the full description here -->
                                <p>{{ $row->desc }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>
