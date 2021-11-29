<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BiodataController extends Controller
{
	public function index()
	{
    	// mengambil data dari table biodata
		$biodata = DB::table('biodata')->get();

    	// mengirim data biodata ke view index
		return view('index',['biodata' => $biodata]);

	}

	// method untuk menampilkan view form tambah biodata
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table biodata
	public function store(Request $request)
	{
		// insert data ke table biodata
		DB::table('biodata')->insert([
			'biodata_nama' => $request->nama,
			'biodata_alamat' => $request->alamat,
			'biodata_tempat_lahir' => $request->tempat_lahir,
			'biodata_tgl_lahir' => $request->tgl_lahir
		]);
		// alihkan halaman ke halaman biodata
		return redirect('/biodata');

	}

	// method untuk edit data biodata
	public function edit($id)
	{
		// mengambil data biodata berdasarkan id yang dipilih
		$biodata = DB::table('biodata')->where('biodata_id',$id)->get();
		// passing data biodata yang didapat ke view edit.blade.php
		return view('edit',['biodata' => $biodata]);

	}

	// update data biodata
	public function update(Request $request)
	{
		// update data biodata
		DB::table('biodata')->where('biodata_id',$request->id)->update([
			'biodata_nama' => $request->nama,
			'biodata_alamat' => $request->alamat,
			'biodata_tempat_lahir' => $request->tempat_lahir,
			'biodata_tgl_lahir' => $request->tgl_lahir
		]);
		// alihkan halaman ke halaman biodata
		return redirect('/biodata');
	}

	// method untuk hapus data biodata
	public function hapus($id)
	{
		// menghapus data biodata berdasarkan id yang dipilih
		DB::table('biodata')->where('biodata_id',$id)->delete();
		
		// alihkan halaman ke halaman biodata
		return redirect('/biodata');
	}
}