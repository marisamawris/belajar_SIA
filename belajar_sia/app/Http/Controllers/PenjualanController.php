<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PenjualanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table penjualan
		$penjualan = DB::table('penjualan')->get();

    	// mengirim data penjualan ke view index
		return view('index',['penjualan' => $penjualan]);

	}

	// method untuk menampilkan view form tambah penjualan
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table penjualan
	public function store(Request $request)
	{
		// insert data ke table penjualan
		DB::table('penjualan')->insert([
			'penjualan_nama' => $request->nama,
			'penjualan_nama_brg' => $request->nama_brg,
			'penjualan_harga' => $request->harga,
			'penjualan_tgl_beli' => $request->tgl_beli,
			'penjualan_tgl_kirim' => $request->tgl_kirim,
			'penjualan_jml_brg' => $request->jml_brg
		]);
		// alihkan halaman ke halaman penjualan
		return redirect('/penjualan');

	}

	// method untuk edit data penjualan
	public function edit($id)
	{
		// mengambil data penjualan berdasarkan id yang dipilih
		$penjualan = DB::table('penjualan')->where('penjualan_id',$id)->get();
		// passing data penjualan yang didapat ke view edit.blade.php
		return view('edit',['penjualan' => $penjualan]);

	}

	// update data penjualan
	public function update(Request $request)
	{
		// update data penjualan
		DB::table('penjualan')->where('penjualan_id',$request->id)->update([
			'penjualan_nama' => $request->nama,
			'penjualan_nama_brg' => $request->nama_brg,
			'penjualan_harga' => $request->harga,
			'penjualan_tgl_beli' => $request->tgl_beli,
			'penjualan_tgl_kirim' => $request->tgl_kirim,
			'penjualan_jml_brg' => $request->jml_brg
		]);
		// alihkan halaman ke halaman penjualan
		return redirect('/penjualan');
	}

	// method untuk hapus data penjualan
	public function hapus($id)
	{
		// menghapus data penjualan berdasarkan id yang dipilih
		DB::table('penjualan')->where('penjualan_id',$id)->delete();
		
		// alihkan halaman ke halaman penjualan
		return redirect('/penjualan');
	}
}