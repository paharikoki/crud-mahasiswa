@extends('layouts.app')
@section('container')
    {{-- <div class="row row-cards ">
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
            </div>
        </div>
    </div>
    <div class="row row-cards mt-4">
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
    {{-- <a class="dropdown-item" href="{{ route('fakultas.destroy', $fakultas) }}">
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
    <div class="row row-cards mt-4">
        <div class="col-12">
            <div class="card">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kode</th>
                            <th>Fakultas</th>
                            <th>Jenjang</th>
                            <th class="w-1">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allprodi as $prodi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-muted">{{ $prodi->name }}</td>
                                <td class="text-muted">{{ $prodi->kode }}</td>
                                <td class="text-muted">{{ $prodi->fakultas->name }}</td>
                                <td class="text-muted">{{ $prodi->jenjang->name }}</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ route('prodi.show', $prodi) }}">
                                                View
                                            </a>
                                            <a class="dropdown-item" href="{{ route('prodi.edit', $prodi) }}">
                                                Edit
                                            </a>
                                            <a class="dropdown-item" href="{{ route('prodi.destroy', $prodi) }}">
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
    </div> --}}
@endsection
