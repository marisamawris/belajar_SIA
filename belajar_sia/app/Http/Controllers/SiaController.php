<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class siaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table users
		$sia = DB::table('users')->get();

    	// mengirim data sia ke view index
		return view('index',['users' => $sia]);

	}

	// method untuk menampilkan view form tambah sia
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table sia
	public function store(Request $request)
	{
		// insert data ke table sia
		DB::table('users')->insert([
			'sia_kd_matkul' => $request->kd_matkul,
			'sia_nm_matkul' => $request->nm_matkul,
			'sia_kd_dosen' => $request->kd_dosen,
			'sia_jam' => $request->jam,
			'sia_jml_mhs' => $request->jml_mhs
		]);
		// alihkan halaman ke halaman sia
		return redirect('/sia');

	}

	// method untuk edit data sia
	public function edit($id)
	{
		// mengambil data users berdasarkan id yang dipilih
		$sia = DB::table('users')->where('sia_id',$id)->get();
		// passing data users yang didapat ke view edit.blade.php
		return view('edit',['users' => $sia]);

	}

	// update data sia
	public function update(Request $request)
	{
		// update data sia
		DB::table('users')->where('sia_id',$request->id)->update([
			'sia_kd_matkul' => $request->kd_matkul,
			'sia_nm_matkul' => $request->nm_matkul,
			'sia_kd_dosen' => $request->kd_dosen,
			'sia_jam' => $request->jam,
			'sia_jml_mhs' => $request->jml_mhs
		]);
		// alihkan halaman ke halaman sia
		return redirect('/sia');
	}

	// method untuk hapus data sia
	public function hapus($id)
	{
		// menghapus data sia berdasarkan id yang dipilih
		DB::table('users')->where('sia_id',$id)->delete();
		
		// alihkan halaman ke halaman sia
		return redirect('/sia');
	}
}