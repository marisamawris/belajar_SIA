<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class formController extends Controller
{
    public function form()
    {
        return view('add_barang');
    }
    public function postData(Request $request)
    {
        $data = [
            'nama'          =>  $request->input('nama'),
            'jumlah'        =>  $request->input('jumlah'),
            'keterangan'    =>  $request->input('keterangan')
        ];
        dd($data);
    }
}