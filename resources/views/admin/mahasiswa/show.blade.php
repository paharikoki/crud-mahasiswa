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
                    <h3 class="card-title">Detail Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        Nama Mahasiswa : <strong>{{ $mahasiswa->user->name }}</strong>
                        <br>
                        NIM : <strong>{{ $mahasiswa->nim }}</strong>
                        <br>
                        Program Studi : <strong>{{ $mahasiswa->prodi->jenjang->name }} |
                            {{ $mahasiswa->prodi->name }}</strong>
                        <br>
                        Jenis Kelamin : <strong>{{ $mahasiswa->jenis_kelamin == 1 ? 'Laki-Laki' : 'Perempuan' }}</strong>
                        <br>
                        Alamat : <strong>{{ $mahasiswa->alamat == null ? '-' : $mahasiswa->alamat }}</strong>
                        <br>
                        No. HP : <strong>{{ $mahasiswa->no_hp == null ? '-' : $mahasiswa->no_hp }}</strong>
                        <br>
                        Email : <strong>{{ $mahasiswa->user->email }}</strong>
                        <br>
                        Password :
                        <strong>[Hidden]</strong>
                        <br>
                        Status : <strong>{{ $mahasiswa->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</strong>

                    </h4>
                </div>
                <!-- Card footer -->
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-link">Kembali</a>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa) }}" class="btn btn-primary ms-auto">Edit
                            Fakultas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('#prodi').on('change', function() {
                var selectedProdi = $(this).val();
                console.log($(this).val());
                // Make an Ajax request to fetch the last NIM based on the selected Prodi
                $.ajax({
                    url: '/fetch-last-nim',
                    type: 'GET',
                    data: {
                        prodi_id: selectedProdi
                    },
                    success: function(response) {
                        // Update the NIM input field with the fetched last NIM
                        $('#nim').val(response.lastNIM);
                        console.log(response.lastNIM);
                    }
                });
            });
        });
    </script> --}}
@endsection
