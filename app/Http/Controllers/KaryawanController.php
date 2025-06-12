<?php

namespace App\Http\Controllers;

// Pastikan Request di-import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KaryawanController extends Controller
{
    /**
     * Menampilkan data karyawan dengan paginasi dan fungsionalitas pencarian.
     */
    // Tambahkan "Request $request" sebagai parameter
    public function index(Request $request)
    {
        // Mulai query ke tabel karyawan
        $query = DB::table('karyawan');

        // Cek apakah ada input pencarian
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            // Tambahkan kondisi WHERE untuk memfilter data
            $query->where('namalengkap', 'like', "%{$searchTerm}%")
                  ->orWhere('kodepegawai', 'like', "%{$searchTerm}%");
        }

        // Lakukan paginasi setelah filtering
        // Gunakan appends() agar parameter search tetap ada saat pindah halaman paginasi
        $karyawan = $query->paginate(10)->appends($request->input());

        // Mengirim data karyawan ke view
        return view('indexKaryawan', ['karyawan' => $karyawan]);
    }

    // ... (method lainnya tidak perlu diubah) ...

    public function tambah()
    {
        return view('tambahKaryawan');
    }

    public function store(Request $request)
    {
        // ... (kode store tidak berubah)
        $request->validate([
            'kodepegawai' => 'required|string|size:5',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|string|size:5',
            'departemen' => 'required|string|max:10',
        ]);

        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect('/karyawan');
    }

    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();

        return redirect('/karyawan');
    }
}
