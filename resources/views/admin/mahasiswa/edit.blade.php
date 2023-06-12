@extends('layouts.app')
@section('container')
    @php
        $currentYear = date('Y');
        $defaultPassword = 'unmer' . $currentYear;
    @endphp
    <div class="d-flex justify-content-center mt-4">
        <div class="col-xl-6 col-md-6 ">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12 col-xl-12">
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <input type="text" class="form-control" hidden name="user_id"
                                value="{{ $mahasiswa->user_id }}">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ $mahasiswa->user->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Induk Mahasiswa</label>
                                <input type="text" class="form-control" id="nim" name="nim"
                                    value="{{ $mahasiswa->nim }}" maxlength="10">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" readonly
                                    value="{{ $mahasiswa->user->email }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Default is {{ $defaultPassword }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Handphone</label>
                                <input type="text" class="form-control" name="no_hp" maxlength="13"
                                    value="{{ $mahasiswa->no_hp }}">
                            </div>
                            <div class="mb-3">
                                <div class="form-label">Program Studi</div>
                                <select class="form-select" id="prodi_id" name="prodi_id">
                                    <option>Pilih Program Studi</option>
                                    @foreach ($allprodi as $prodi)
                                        <option value="{{ $prodi->id }}"
                                            @if ($mahasiswa->prodi_id == $prodi->id) selected @endif>{{ $prodi->jenjang->name }} |
                                            {{ $prodi->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-label">Jenis Kelamin</div>
                                <select class="form-select" id="jk" name="jk">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option @if ($mahasiswa->jenis_kelamin == 1) selected @endif value="1">Laki - Laki
                                    </option>
                                    <option @if ($mahasiswa->jenis_kelamin == 0) selected @endif value="0">Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="" cols="30" rows="10">
                                    {{ $mahasiswa->alamat }}
                                </textarea>

                            </div>
                            <div class="mb-3">
                                <div class="form-label">Status</div>
                                <select class="form-select" id="status" name="status">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option @if ($mahasiswa->status == 1) selected @endif value="1">Aktif
                                    </option>
                                    <option @if ($mahasiswa->status == 0) selected @endif value="0">Tidak Aktif
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="col ">
                                    <div class="col-12 gap-3">
                                        <button type="submit" class="btn btn-primary w-100">Tambah Prodi</button>
                                        <a href="{{ route('mahasiswa.index') }}"
                                            class="btn btn-outline w-100 mt-2">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#nim').on('input', function() {
                var nim = $(this).val(); // Get the value of the nim input
                var email = nim + '@student.unmer.ac.id'; // Modify the nim to create the email

                $('#email').val(email); // Update the email input field with the modified value
            });
        });
    </script>
@endsection
