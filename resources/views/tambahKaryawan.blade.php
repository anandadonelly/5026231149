@extends('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Karyawan Baru</h3>
                </div>
                <div class="card-body">
                    {{-- Form mengarah ke route 'karyawan/store' untuk menyimpan data  --}}
                    <form action="/karyawan/store" method="post" class="form-horizontal">
                        {{ csrf_field() }}

                        {{-- Layout Horizontal Form diterapkan  --}}
                        <div class="form-group row">
                            <label for="kodepegawai" class="col-sm-3 col-form-label">Kode Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="kodepegawai" id="kodepegawai" required="required" maxlength="5">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="namalengkap" id="namalengkap" required="required" maxlength="50">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="divisi" id="divisi" required="required" maxlength="5">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departemen" class="col-sm-3 col-form-label">Departemen</label>
                            <div class="col-sm-9">
                                {{-- Menggunakan VARCHAR(10) sesuai koreksi --}}
                                <input type="text" class="form-control" name="departemen" id="departemen" required="required" maxlength="10">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                                <a href="/karyawan" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
