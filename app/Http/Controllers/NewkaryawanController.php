<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    public function index()
    {

    	$newkaryawan = DB::table('newkaryawan')->get();
    	return view('indexnewkaryawan',['newkaryawan' => $newkaryawan]);
    }


    public function tambah(){
        return view('tambahnewkaryawan');
    }

public function store(Request $request)
{

    $request-> validate([
        'NIP' => 'required|unique:newkaryawan,NIP|max:9',
        'nama' => 'required|max:50',
        'pangkat' => 'required|max:15',
        'gaji' => 'required|integer',
    ]) ;


	DB::table('newkaryawan')->insert([
		'NIP' => $request->NIP,
		'nama' => $request->nama,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	]);
	return redirect('/eas');

}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('newkaryawan')->where('NIP',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
}
}
