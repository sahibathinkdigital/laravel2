<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Sr. No</th> <!-- New Column -->
                <th>Porfolio</th>
                <th>Type of</th>
                <th>Link</th>
                <th>Image</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse ($career as $key => $row)
                <tr>
                    <td>{{ $career->firstItem() + $key }}</td> <!-- Calculate Serial Number -->
                    <td>{{ $row->f_name }}</td>
                    <td>{{ $row->l_name }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->specialization }}</td>
                    <td>{{ $row->message }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td class="action__btn">
                        <a href="{{ asset($row->file_path) }}" class="delete" onclick="showMessage({{ $row->id }})"
                            data-toggle="tooltip" data-placement="top" title=""
                            download="{{ $row->f_name . '_' . $row->l_name }}.pdf">
                            <i class="fa-solid fa-file-pdf text-light"></i>
                        </a> --}}
                        {{-- <a class="delete" onclick="quotesDelete({{ $row->id }})"
                            href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="17">
                                <path fill="#ffffff"
                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </a> --}}
                    {{-- </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">No records found</td>
                </tr>
            @endforelse --}}
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $career->links('pagination::bootstrap-4') }}
    </div>
</div>
