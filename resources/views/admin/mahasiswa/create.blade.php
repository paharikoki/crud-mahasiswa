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
                        <form action="{{ route('mahasiswa.store') }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="mb-3">
                                <div class="form-label">Program Studi</div>
                                <select class="form-select" id="prodi_id" name="prodi_id">
                                    <option>Pilih Program Studi</option>
                                    @foreach ($allprodi as $prodi)
                                        <option value="{{ $prodi->id }}">{{ $prodi->jenjang->name }} |
                                            {{ $prodi->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label">Nomor Induk Mahasiswa</label>
                                <input type="text" id="nim" readonly class="form-control" name="nim">
                            </div> --}}
                            <div class="mb-3">
                                <div class="form-label">Jenis Kelamin</div>
                                <select class="form-select" id="jk" name="jk">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">Laki - Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                    {{-- @foreach ($allprodi as $prodi)
                                        <option value="{{ $prodi->id }}">{{ $prodi->jenjang->name }} |
                                            {{ $prodi->name }}
                                        </option>
                                    @endforeach --}}
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
