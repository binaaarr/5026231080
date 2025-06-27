<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
	public function indexkeranjang()
	{
    	// mengambil data dari table keranjangbelanja
		// $keranjangbelanja = DB::table('keranjangbelanja')->get(); //all record

        // $keranjang = DB::table('keranjangbelanja')->paginate(10); //array perpage 10
    	// mengirim data keranjangbelanja ke view index

        try {
             $keranjang = DB::table('keranjangbelanja')->paginate(10);
        } catch (\Exception $e) {
            logger()->error('DB error: ' . $e->getMessage());
            throw $e;
        }
		return view('indexkeranjang',['keranjangbelanja' => $keranjang]);

	}

	// method untuk menampilkan view form tambah keranjangbelanja
	public function tambahbarang()
	{

		// memanggil view tambah
		return view('tambahbarang');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'id' => $request->id,
			'kodebarang' => $request->kodebarang,
			'jumlah' => $request->jumlah,
			'harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjang');

	}

	// method untuk edit data keranjangbelanja
	public function edit($id)
	{
		// mengambil data keranjangbelanja berdasarkan id yang dipilih
		$keranjang = DB::table('keranjangbelanja')->where('id',$id)->get();

		// passing data keranjangbelanja yang didapat ke view edit.blade.php
		return view('edit',['keranjangbelanja' => $keranjang]);

	}

	// update data keranjangbelanja
	public function update(Request $request)
	{
		// update data keranjangbelanja
		DB::table('keranjangbelanja')->where('ID',$request->id)->update([
			'id' => $request->id,
			'kodebarang' => $request->kodebarang,
			'jumlah' => $request->jumlah,
			'harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjang');
	}

	// method untuk hapus data keranjangbelanja
	public function hapus($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjang');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table keranjangbelanja sesuai pencarian data
		$keranjang = DB::table('keranjangbelanja')
		->where('KodeBarang','like',"%".$cari."%")
		->paginate();

    		// mengirim data keranjangbelanja ke view index keranjangbelanja
		return view('indexkeranjang',['keranjangbelanja' => $keranjang, 'cari' => $cari]);

	}
}
