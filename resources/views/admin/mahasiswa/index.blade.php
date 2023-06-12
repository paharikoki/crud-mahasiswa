@extends('layouts.app')
@section('container')
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                            <th>Status</th>
                            <th class="w-1">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $itemsPerPage = 10;
                            $currentPage = request()->get('page', 1);
                            $startIndex = ($currentPage - 1) * $itemsPerPage + 1;
                        @endphp
                        @foreach ($allmahasiswa as $mahasiswa)
                            <tr>
                                <td>{{ $startIndex++ }}</td>
                                <td class="text-muted">{{ $mahasiswa->user->email }}</td>
                                <td class="text-muted">{{ $mahasiswa->user->name }}</td>
                                <td class="text-muted">{{ $mahasiswa->prodi->name }}</td>
                                <td class="text-muted">{{ $mahasiswa->prodi->jenjang->name }}</td>
                                <td class=" text-capitalize">{{ $mahasiswa->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ route('mahasiswa.show', $mahasiswa) }}">
                                                View
                                            </a>
                                            <a class="dropdown-item" href="{{ route('mahasiswa.edit', $mahasiswa) }}">
                                                Edit
                                            </a>
                                            <a class="dropdown-item" href="{{ route('mahasiswa.destroy', $mahasiswa) }}">
                                                Delete
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $allmahasiswa->links('vendor.paginator') }}
            </div>
        </div>
    </div>
@endsection
