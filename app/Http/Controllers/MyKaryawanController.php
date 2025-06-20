<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MyKaryawanController extends Controller
{
	public function indexeas()
	{
    		// mengambil seluruh data dari table pegawai
		$mykaryawan = DB::table('mykaryawan')->get();

    		// mengirim data karyawan ke view index
		return view('indexeas',['mykaryawan' => $mykaryawan]);

	}

	public function store(Request $request)
	{
        DB::table('mykaryawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

		return redirect('/eas');
    }

    public function editeas($kodepegawai)
	{
		// mengambil data mykaryawan berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->get();

		// passing data mykaryawan yang didapat ke view edit
		return view('editeas', ['mykaryawan' => $mykaryawan]);
	}

    public function update(Request $request)
	{

		DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
			// 'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);

        return redirect('/eas');
    }

    public function view($kodepegawai)
    {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('view', ['mykaryawan' => $mykaryawan]);
    }

    public function hapus($kodepegawai)
	{
		DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
		return redirect('/eas');
	}
}
