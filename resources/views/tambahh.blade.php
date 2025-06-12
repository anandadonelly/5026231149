@extends('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Processor Baru</h3>
                </div>
                <div class="card-body">
                    <form action="/processor/store" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="merkprocessor">Merk Processor</label>
                            <input type="text" class="form-control" name="merkprocessor" id="merkprocessor" required="required">
                        </div>

                        <div class="form-group">
                            <label for="hargaprocessor">Harga Processor</label>
                            <input type="number" class="form-control" name="hargaprocessor" id="hargaprocessor" required="required">
                        </div>

                        <div class="form-group">
                            <label for="berat">Berat (kg)</label>
                            <input type="number" class="form-control" step="0.01" name="berat" id="berat" required="required">
                        </div>

                        <div class="form-group">
                            <label for="tersedia">Status Ketersediaan</label>
                            <select class="form-control" name="tersedia" id="tersedia" required>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                        </div>

                        <a href="/processor" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
