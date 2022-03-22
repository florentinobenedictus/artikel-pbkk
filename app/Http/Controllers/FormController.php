<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
	    
		
		$messagesError = [
			'required' => ':attribute ini wajib diisi!!!',
			'nama.min' => ':attribute harus diisi minimal :min karakter!!!',
			'nama.max' => ':attribute harus diisi maksimal :max karakter!!!',
			'alamat.min' => ':attribute harus diisi minimal :min karakter!!!',
			'alamat.max' => ':attribute harus diisi maksimal :max karakter!!!',
			'yakin.between' => ':attribute harus bernilai antara :min dan :max, yuk bisa yuk!!!',
			'usia.min' => ':attribute harus diisi dengan nilai minimal :min!!!',
			'gambar.mimes' => ':attribute harus memiliki tipe file .jpeg, .jpg, atau .png!!!',
			'gambar.max' => 'ukuran :attribute maksimal 2 MB!!!'
		];
		
        $this->validate($request,[
           'nama' => 'required|min:3|max:30',
           'alamat' => 'required|min:8|max:40',
           'usia' => 'required|numeric|min:0',
		   'jawaban' => 'required',
		   'yakin' => 'required|numeric|between:2.5,99.99',
		   'gambar' => 'mimes:jpeg,jpg,png|required|file|max:2048'
        ],$messagesError);
 		
		$file = $request->file('gambar');
		$destinationPath = 'img/';
		$originalFile = $file->getClientOriginalName();
		$file->move($destinationPath, $originalFile);
		
        return view('proses',['data' => $request]);
    }
}