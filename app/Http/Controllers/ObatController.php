<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
	public function indexobat()
	{
    	// mengambil data dari table obat
		// $obat = DB::table('obat')->get(); //all record

        // $obat = DB::table('obat')->paginate(10); //array perpage 10
    	// mengirim data obat ke view index

        try {
             $obat = DB::table('obat')->paginate(10);
        } catch (\Exception $e) {
            logger()->error('DB error: ' . $e->getMessage());
            throw $e;
        }
		return view('indexobat',['obat' => $obat]);

	}

	// method untuk menampilkan view form tambah obat
	public function tambahobat()
	{

		// memanggil view tambah
		return view('tambahobat');

	}

	// method untuk insert data ke table obat
	public function store(Request $request)
	{
		// insert data ke table obat
		DB::table('obat')->insert([
			'merkobat' => $request->Merk,
			'hargaobat' => $request->Harga,
			'tersedia' => $request->Tersedia,
			'berat' => $request->Berat
		]);
		// alihkan halaman ke halaman obat
		return redirect('/obat');

	}

	// method untuk edit data obat
	public function edit($id)
	{
		// mengambil data obat berdasarkan id yang dipilih
		$obat = DB::table('obat')->where('ID',$id)->get();

		// passing data obat yang didapat ke view edit.blade.php
		return view('edit',['obat' => $obat]);

	}

	// update data obat
	public function update(Request $request)
	{
		// update data obat
		DB::table('obat')->where('ID',$request->id)->update([
			'merkobat' => $request->Merk,
			'hargaobat' => $request->Harga,
			'tersedia' => $request->Tersedia,
			'berat' => $request->Berat
		]);
		// alihkan halaman ke halaman obat
		return redirect('/obat');
	}

	// method untuk hapus data obat
	public function hapus($id)
	{
		// menghapus data obat berdasarkan id yang dipilih
		DB::table('obat')->where('ID',$id)->delete();

		// alihkan halaman ke halaman obat
		return redirect('/obat');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table obat sesuai pencarian data
		$obat = DB::table('obat')
		->where('merkobat','like',"%".$cari."%")
		->paginate();

    		// mengirim data obat ke view index obat
		return view('indexobat',['obat' => $obat, 'cari' => $cari]);

	}
}
