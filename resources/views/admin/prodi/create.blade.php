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
                    <h3 class="card-title">Tambah Program Studi</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12 col-xl-12">
                        <form action="{{ route('prodi.store') }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kode</label>
                                <input type="text" class="form-control" name="kode" maxlength="3">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Fakultas</label>
                                <select class="form-select" id="fakultas_id" name="fakultas_id">
                                    <option>Pilih Fakultas</option>
                                    @foreach ($fakultas as $fakulty)
                                        <option value="{{ $fakulty->id }}">
                                            {{ $fakulty->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenjang</label>
                                <select class="form-select" id="jenjang_id" name="jenjang_id">
                                    <option>Pilih Jenjang</option>
                                    @foreach ($jenjangs as $jenjang)
                                        <option value="{{ $jenjang->id }}">
                                            {{ $jenjang->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="col ">
                                    <div class="col-12 gap-3">
                                        <button type="submit" class="btn btn-primary w-100">Tambah Prodi</button>
                                        <a href="{{ route('prodi.index') }}" class="btn btn-outline w-100 mt-2">Cancel</a>
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
