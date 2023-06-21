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
                    <h3 class="card-title">Detail Program Studi</h3>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        Nama Program Studi : <strong>{{ $prodi->name }}</strong>
                        <br>
                        Kode Program Studi : <strong>{{ $prodi->kode }}</strong>
                        <br>
                        Fakultas : <strong>{{ $prodi->fakultas->name }}</strong>
                        <br>
                        Jenjang Program Studi : <strong>{{ $prodi->jenjang->name }}</strong>
                    </h4>
                </div>
                <!-- Card footer -->
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="{{ route('prodi.index') }}" class="btn btn-link">Kembali</a>
                        <a href="{{ route('prodi.edit', $prodi) }}" class="btn btn-primary ms-auto">Edit Program Studi</a>
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
