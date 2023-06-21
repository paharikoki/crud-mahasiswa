@extends('layouts.app')
@section('container')
    <div class="row row-cards">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert" id="autohide-alert">
                {{ $message }}
            </div>
        @endif
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
                                            <a class="dropdown-item"
                                                onclick="event.preventDefault();
                                            Swal.fire({
                                                title: 'Are you sure you want to delete this record?',
                                                text: 'Name: {{ $fakultas->name }}'
                                            , icon: 'warning' , showCancelButton: true, confirmButtonColor: '#3085d6' ,
                                            cancelButtonColor: '#d33' , confirmButtonText: 'Yes, delete it!'
                                            }).then((result)=> {
                                            if (result.isConfirmed) {
                                            window.location.href = '{{ route('fakultas.destroy', $fakultas) }} ';
                                            } else {
                                            Swal.fire(
                                            'Cancelled',
                                            'Deletion canceled your data is safe :)',
                                            'info'
                                            )
                                            }
                                            })
                                            ">
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
@endsection
