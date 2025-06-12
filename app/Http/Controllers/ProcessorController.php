<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessorController extends Controller
{
    /**
     * Menampilkan semua data processor.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data dari tabel processor
        $processors = DB::table('processor')->paginate(10);

        // Mengirim data processors ke view 'processor.iindex'
        return view('iindex', ['processors' => $processors]); // <-- Make sure this is 'processor.iindex'
    }

    /**
     * Menampilkan form untuk menambah processor baru.
     *
     * @return \Illuminate\View\View
     */
    public function tambah()
    {
        // Memanggil view 'processor.tambahh'
        return view('tambahh');
    }

    /**
     * Menyimpan data processor baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Memasukkan data ke tabel processor
        DB::table('processor')->insert([
            'merkprocessor' => $request->merkprocessor,
            'hargaprocessor' => $request->hargaprocessor,
            // GANTI BARIS INI
            'tersedia' => $request->tersedia, // Sebelumnya: $request->has('tersedia')
            'berat' => $request->berat
        ]);

        // Mengalihkan halaman ke halaman daftar processor
        return redirect('/processor');
    }

    /**
     * Menampilkan form untuk mengedit data processor.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Mengambil data processor berdasarkan ID yang dipilih
        $processor = DB::table('processor')->where('ID', $id)->first(); // Menggunakan first() karena hanya satu record

        // Pastikan processor ditemukan
        if (!$processor) {
            return redirect('/processor')->with('error', 'Processor tidak ditemukan.');
        }

        // Mengirim data processor yang didapat ke view 'processor.editt'
        return view('editt', ['processor' => $processor]);
    }

    /**
     * Memperbarui data processor di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // Memperbarui data processor
        DB::table('processor')->where('ID', $request->id)->update([
            'merkprocessor' => $request->merkprocessor,
            'hargaprocessor' => $request->hargaprocessor,
            'tersedia' => $request->tersedia, // Menggunakan has() untuk boolean dari checkbox
            'berat' => $request->berat
        ]);

        // Mengalihkan halaman ke halaman daftar processor
        return redirect('/processor');
    }

    /**
     * Menghapus data processor dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function hapus($id)
    {
        // Menghapus data processor berdasarkan ID yang dipilih
        DB::table('processor')->where('ID', $id)->delete();

        // Mengalihkan halaman ke halaman daftar processor
        return redirect('/processor');
    }
}
