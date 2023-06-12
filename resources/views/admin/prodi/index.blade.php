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
    </div>
@endsection
