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
            'required' => ':attribute ini wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
        ];
        
        $this->validate($request,[
            'nama' => 'required|min:5',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'nilai' => 'required|numeric|between:2.50,99.99'
        ],$messagesError);

        //$request->gambar->store('images', 'public');

        //$file = $request->file('gambar');
        //$destinationPath = 'public/img/';
        //$originalFile = $file->getClientOriginalName();
        //$file->move($destinationPath, $originalFile);

        //$imageName = time().'.'.$request->gambar->extension();  
     
        //$request->gambar->move(public_path('images'), $imageName);

        $img = $request->file('gambar');
        $name = $img->getClientOriginalName();
        $uploaded = $img->move('public/img', $name);
 		
        return view('proses',['data' => $request, 'uploaded'=>$uploaded]);
    }
}