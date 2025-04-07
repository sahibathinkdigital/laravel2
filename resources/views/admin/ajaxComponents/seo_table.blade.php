<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-DyZvhnHRXK8OpR7cE2TkN4d6k2QgX21cR9ED9vQQd5zIdnoHjJ3cX57WnNw0p6x9" crossorigin="anonymous">

<table class="table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Page</th>
            <th>Title</th>
            <th>Description</th>
            <th>Keywords</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($seo as $row)
            <tr>
                <td><img src="{{ asset($row->image) }}" width="200" alt=""></td>
                <td  class="text-capitalize">{{ $row->page }}</td>
                <td  class="text-capitalize">{{ $row->title }}</td>
                <td  class="text-capitalize">
                    <!-- Trigger Modal -->
                    <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                        data-target="#descriptionModal{{ $row->id }}">
                        Description
                    </a>
                    <!-- Modal -->
                    <div id="descriptionModal{{ $row->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Description</h4>
                                </div>
                                <div class="modal-body">
                                    <p>{{ $row->desc }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                {{-- <td  class="text-capitalize">{{ $row->desc }}</td> --}}
                <td  class="text-capitalize">
                    <!-- Trigger Modal -->
                    <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                        data-target="#keywordModal{{ $row->id }}">
                        Keyword
                    </a>
                    <!-- Modal -->
                    <div id="keywordModal{{ $row->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Keyword</h4>
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
                {{-- <td  class="text-capitalize">{{ $row->keywords }}</td> --}}
                <td class="action__btn">
                    <!-- Edit Button -->
                    <a class="edit" data-id="{{ $row->id }}" data-toggle="tooltip" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                            <path fill="#ffffff" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                        </svg>

                    </a>

                    <!-- Delete Button -->
                    <a class="delete" onclick="seoDestroy({{ $row->id }})" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="17">
                            <path fill="#ffffff" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                        </svg>

                    </a>
                </td>



            </tr>
        @endforeach
    </tbody>
</table>

<!-- JavaScript to handle edit action -->
<script>


    // Event delegation for dynamically loaded rows
    document.addEventListener('click', function(event) {
        if (event.target.closest('.edit')) {
            const id = event.target.closest('.edit').getAttribute('data-id');
            categoryEdit(id);
        }
    });

    // Fetch SEO data for editing
    function categoryEdit(id) {
    $.ajax({
        type: "GET",
        url: `{{ url('admin/seo/edit/${id}') }}`, // Adjust URL for your project
        success: function(data) {
            $("input[name='id']").val(data.id);
            $("input[name='title']").val(data.title);
            $("textarea[name='desc']").val(data.desc);
            $("input[name='page']").val(data.page);
            $("textarea[name='keywords']").val(data.keywords);
            $(".show_form").show(); // Display form for editing
        }
    });
}

// Handle form submission for both create and update
$("#seo_form").submit(function(e) {
    e.preventDefault();
    $("#seo_form button").attr('disabled', 'disabled');

    let form = new FormData(this);
    let id = $("#seo_form").attr("data-id"); // Check if it's an update
    let url = id ? "/admin/seo/update/" + id : "{{ route('admin.storeSeo') }}"; // Update URL if editing

    $.ajax({
        type: "POST",
        url: url,
        data: form,
        dataType: "json",
        contentType: false,
        processData: false,
        success: function(data) {
            if (data.status === "success") {
                notify(data.status, data.message);
                fetchData();
                $("#seo_form").trigger('reset');
                $("#seo_form button").removeAttr("disabled");
                $(".show_form").hide();
                $("#seo_form").removeAttr("data-id"); // Clear ID after update
            } else {
                notify(data.status, data.message);
                $("#seo_form button").removeAttr("disabled");
            }
        },
        error: function(error) {
            $("#seo_form button").removeAttr("disabled");
        }
    });
});

</script>
