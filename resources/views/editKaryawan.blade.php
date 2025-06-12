@extends('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Processor</h3>
                </div>
                <div class="card-body">
                    <form action="/processor/update" method="post">
                        {{ csrf_field() }}

                        {{-- ID adalah primary key, jangan ubah --}}
                        <input type="hidden" name="id" value="{{ $processor->ID }}">

                        <div class="form-group">
                            <label for="merkprocessor">Merk Processor</label>
                            <input type="text" class="form-control" name="merkprocessor" id="merkprocessor" required="required" value="{{ $processor->merkprocessor }}">
                        </div>

                        <div class="form-group">
                            <label for="hargaprocessor">Harga Processor</label>
                            <input type="number" class="form-control" name="hargaprocessor" id="hargaprocessor" required="required" value="{{ $processor->hargaprocessor }}">
                        </div>

                        <div class="form-group">
                            <label for="berat">Berat (kg)</label>
                            <input type="number" class="form-control" step="0.01" name="berat" id="berat" required="required" value="{{ $processor->berat }}">
                        </div>

                        <div class="form-group">
                            <label for="tersedia">Status Ketersediaan</label>
                            <select class="form-control" name="tersedia" id="tersedia" required>
                                {{-- Logika untuk memilih opsi yang sesuai dengan data di database --}}
                                <option value="1" {{ $processor->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                                <option value="0" {{ $processor->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                            </select>
                        </div>

                        <a href="/processor" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
