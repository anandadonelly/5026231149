@extends('template') {{-- Ini menggantikan @include('template') --}}

@section('content') {{-- Mulai section 'content' di sini --}}

    <h3>Data Processor</h3>

    {{-- Tambahkan kelas Bootstrap untuk tombol --}}
    <a href="/processor/tambah" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Processor Baru
    </a>

    <br />
    <br />

    {{-- Gunakan kelas Bootstrap untuk tabel --}}
    <table class="table table-bordered table-striped">
        <thead class="thead-dark"> {{-- Header tabel gelap --}}
            <tr>
                <th>ID</th>
                <th>Merk Processor</th>
                <th>Harga Processor</th>
                <th>Tersedia</th>
                <th>Berat (kg)</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Pastikan variabel di controller adalah $processors --}}
            @foreach ($processors as $p)
                <tr>
                    <td>{{ $p->ID }}</td>
                    <td>{{ $p->merkprocessor }}</td>
                    <td>Rp {{ number_format($p->hargaprocessor, 0, ',', '.') }}</td>
                    <td>
                        {{-- Gunakan badge Bootstrap untuk tampilan boolean yang lebih baik --}}
                        @if ($p->tersedia)
                            <span class="badge badge-success">Ya</span>
                        @else
                            <span class="badge badge-danger">Tidak</span>
                        @endif
                    </td>
                    <td>{{ $p->berat }}</td>
                    <td>
                        {{-- Tambahkan kelas Bootstrap untuk tombol Edit dan Hapus --}}
                        <a href="/processor/edit/{{ $p->ID }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="/processor/hapus/{{ $p->ID }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


        <div>
            {{ $processors->links() }}
        </div>
    </div>

@endsection
