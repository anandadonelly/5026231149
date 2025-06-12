@extends('template')

@section('content')

    <h3>Data Karyawan</h3>
    <br/>
    {{-- FORM PENCARIAN --}}
    <div class="row mb-3">
        <div class="col-md-6">
            <form action="/karyawan" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan Nama atau Kode..." value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i> Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- AKHIR FORM PENCARIAN --}}
    {{-- Tabel untuk menampilkan semua data karyawan dengan Bootstrap  --}}
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $k->kodepegawai }}</td>
                    {{-- namalengkap ditampilkan dengan huruf kapital semua  --}}
                    <td>{{ strtoupper($k->namalengkap) }}</td>
                    <td>{{ $k->divisi }}</td>
                    {{-- departemen ditampilkan dengan huruf kecil semua  --}}
                    <td>{{ strtolower($k->departemen) }}</td>
                    <td class="text-center">
                        <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br/>
    {{-- Tombol "Tambah Data" terletak di bawah tabel  --}}
    <a href="/karyawan/tambah" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Data
    </a>

    <br/>
    <div class="d-flex justify-content-center">
        {{ $karyawan->links() }}
    </div>


@endsection
