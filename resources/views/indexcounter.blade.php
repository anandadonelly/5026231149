@extends('template')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4">Counter Pengunjung</h1>

    <div class="alert alert-success text-center" role="alert" style="font-size: 1.2rem;">
        <div>
            <i class="bi bi-people"></i>
            Anda adalah pengunjung ke-<strong>{{ $jumlah }}</strong>
        </div>
    </div>
    <div class="text-center mt-4">
        Refresh halaman ini untuk melihat jumlah pengunjung yang terus bertambah.
    </div>
</div>
@endsection
