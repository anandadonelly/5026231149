@extends('template')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Data Karyawan Baru</h2>
        <a href="/eas/tambah" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Data Karyawan
        </a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>Gaji</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newkaryawan as $k)
                <tr>
                    <td>{{ $k->NIP }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->pangkat }}</td>
                    <td>Rp {{ number_format($k->gaji, 0, ',', '.') }}</td>
                    <td>
                        <a href="/eas/hapus/{{ $k->NIP }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
