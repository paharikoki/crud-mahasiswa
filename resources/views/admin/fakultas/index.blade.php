@extends('layouts.app')
@section('container')
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th class="w-1">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allfakultas as $fakultas)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-muted">{{ $fakultas->name }}</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ route('fakultas.show', $fakultas) }}">
                                                View
                                            </a>
                                            <a class="dropdown-item" href="{{ route('fakultas.edit', $fakultas) }}">
                                                Edit
                                            </a>

                                            {{-- <a class="dropdown-item" data-fakultas-id=""="{{ $fakultas->id }}"
                                                data-bs-toggle="modal" data-bs-target="#modal-delete">
                                                Delete
                                            </a> --}}
                                            <a class="dropdown-item" href="{{ route('fakultas.destroy', $fakultas) }}">
                                                Delete
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 9v2m0 4v.01" />
                        <path
                            d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                    </svg>
                    <h3>Are you sure? To delete <span id="fakultas-id"></span></h3>
                    <div class="text-muted">
                        <p>
                            you cannot undo this action once it is done. You will lose all data related to this item.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col"><a class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                </a></div>
                            <div class="col"><a href="{{ route('fakultas.destroy', $fakultas) }}"
                                    class="btn btn-danger w-100" data-bs-dismiss="modal">
                                    Delete
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#modal-delete').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var fakultasId = button.data(
                    'fakultas-id'); // Extract fakultas ID from data-fakultas-id attribute
                var modal = $(this);

                // Fetch the fakultas data using an AJAX request
                $.ajax({
                    url: '/fakultas/' + fakultasId,
                    type: 'GET',
                    success: function(response) {
                        modal.find('#fakultas-id').text(response
                            .id); // Set the fakultas ID in the modal
                        modal.find('#fakultas-name').text(response
                            .name); // Set the fakultas name in the modal
                        modal.find('#delete-btn').attr('href', '/fakultas/' + fakultasId +
                            '/delete'); // Update the delete button's href
                    },
                    error: function(xhr, status, error) {
                        // Handle error if fetching fakultas data fails
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
