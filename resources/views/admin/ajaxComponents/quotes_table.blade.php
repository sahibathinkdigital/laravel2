<table class="table">
    <thead>
        <tr>
            <th>Website URL</th>
            <th>Company Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Message</th>
            <th>Date</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($quotes as $quote)
            <tr>
                <td>
                    <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                        data-target="#websiteLinkModal{{ $quote->id }}">
                        Website Url
                    </a>
                    <!-- Modal for LinkedIn Link -->
                    <div id="websiteLinkModal{{ $quote->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Website URL</h4>
                                </div>
                                <div class="modal-body">
                                    <p><a href="{{ $quote->website_url }}" target="_blank">{{ $quote->website_url }}</a>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>{{ $quote->company_name }}</td>
                <td>{{ $quote->f_name }}</td>
                <td>{{ $quote->l_name }}</td>
                <td>{{ $quote->email }}</td>
                <td>{{ $quote->phone_number }}</td>
                <td>
                    <a href="javascript:void(0);" class="text-primary" data-toggle="modal"
                        data-target="#quotesmsgModal{{ $quote->id }}">
                        Message
                    </a>
                    <!-- Modal for LinkedIn Link -->
                    <div id="quotesmsgModal{{ $quote->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Message</h4>
                                </div>
                                <div class="modal-body">
                                    <p>{{ $quote->message }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    </td>

                <td>{{ $quote->created_at->format('d-m-Y') }}</td>
                <td class="action__btn">
                    <!--<a class="edit" onclick="showMessage({{ $quote->id }})" href="javascript:void(0)"-->
                    <!--    data-toggle="tooltip" data-placement="top" title="View Message">-->
                    <!--    <i class="fa-solid fa-eye"></i>-->
                    <!--</a>-->
                    <!--<a class="edit" onclick="showMessage({{ $quote->id }})" href="javascript:void(0)" -->
                    <!--    data-toggle="tooltip" data-placement="top" title="View Message">-->
                    <!--    <i class="fa-solid fa-eye"></i>-->
                    <!--</a>-->
                    <!-- Message Modal -->
                    <!--<div class="modal fade" id="messageModal{{ $quote->id }}" tabindex="-1" role="dialog"-->
                    <!--    aria-labelledby="messageModalLabel{{ $quote->id }}" aria-hidden="true">-->
                    <!--    <div class="modal-dialog" role="document">-->
                    <!--        <div class="modal-content">-->
                    <!--            <div class="modal-header">-->
                    <!--                <h5 class="modal-title" id="messageModalLabel{{ $quote->id }}">Message</h5>-->
                    <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                    <!--                    <span aria-hidden="true">&times;</span>-->
                    <!--                </button>-->
                    <!--            </div>-->
                    <!--            <div class="modal-body">-->
                    <!--                <div class="message_con">-->
                                        <!-- Message content will be dynamically loaded here -->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class="modal-footer">-->
                    <!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    

                    <a class="delete" onclick="quotesDelete({{ $quote->id }})" href="javascript:void(0)"
                        data-toggle="tooltip" data-placement="top" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="17">
                            <path fill="#ffffff"
                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                        </svg>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">Quotes not available</td>
            </tr>
        @endforelse
    </tbody>
</table>
