@extends('template')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Tambah Data Karyawan Baru</h2>

        {{-- Menampilkan pesan error validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/eas/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="NIP">NIP:</label>
                <input type="text" class="form-control" id="NIP" name="NIP" required="required" maxlength="9">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required="required" maxlength="50">
            </div>
            <div class="form-group">
                <label for="pangkat">Pangkat:</label>
                <input type="text" class="form-control" id="pangkat" name="pangkat" required="required" maxlength="15">
            </div>
            <div class="form-group">
                <label for="gaji">Gaji:</label>
                <input type="number" class="form-control" id="gaji" name="gaji" required="required">
            </div>
            <button type="submit" class="btn btn-success">Simpan Data</button>
            <a href="/eas" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
