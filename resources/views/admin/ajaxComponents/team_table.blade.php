<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Social Link</th>
                <th>LinkedIn Link</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $row)
                <tr>
                    <td><img src="{{ asset($row->image_path) }}" width="100" alt=""></td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->designation }}</td>
                    <td>
                        @if ($row->social_link)
                            <!-- Check if social_link exists -->
                            <!-- Website Link -->
                            <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                                data-target="#socialLinkModal{{ $row->id }}">
                                Social Link
                            </a>
                            <!-- Modal -->
                            <div id="socialLinkModal{{ $row->id }}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Website Link</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Optionally, if you want to show the link as is (not masked) when hovered over or clicked, you can add: -->
                                            <a href="{{ $row->social_link }}" target="_blank"
                                                style="text-decoration: underline;">
                                                {{ $row->social_link }}
                                            </a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- If no social link, display nothing or a placeholder text -->
                            <span>No Social Link</span>
                        @endif
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                            data-target="#linkedinLinkModal{{ $row->id }}">
                            LinkedIn Link
                        </a>
                        <!-- Modal for LinkedIn Link -->
                        <div id="linkedinLinkModal{{ $row->id }}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">LinkedIn Link</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><a href="{{ $row->linkedin_link }}"
                                                target="_blank">{{ $row->linkedin_link }}</a></p>
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
                        <a class="edit" href="{{ route('admin.teamEdit', $row->id) }}" data-toggle="tooltip"
                            data-placement="top" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                <path fill="#ffffff"
                                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                            </svg>
                        </a>
                        <a class="delete" onclick="teamDestroy({{ $row->id }})" href="javascript:void(0)"
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
</div>
