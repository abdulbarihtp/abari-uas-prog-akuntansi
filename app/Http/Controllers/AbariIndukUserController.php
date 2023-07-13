<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbariIndukUserModel;

class AbariIndukUserController extends Controller
{
    public function index(){
        $myakun = new AbariIndukUserModel();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('abari_induk_user/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('abari_induk_user/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_induk_user')
        ->insert([
            'id_user' => $request->id_user,
            'nama_lengkap'  =>  $request->nama_lengkap,
            'alamat'  =>  $request->alamat,
            'telepon'  =>  $request->telepon,
            'email' => $request->email,
            'divisi' => $request->divisi,
        ]);
        return redirect('abari_induk_user');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('abari_induk_user')->where('id_user', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('abari_induk_user/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_induk_user')->where('id_user',$request->id_user)
        ->update([
            'id_user' => $request->id_user,
            'nama_lengkap'  =>  $request->nama_lengkap,
            'alamat'  =>  $request->alamat,
            'telepon'  =>  $request->telepon,
            'email' => $request->email,
            'divisi' => $request->divisi,
        ]);
        return redirect('abari_induk_user');
    }

    public function delete ($id){
        $query = \DB::table('abari_induk_user')->where('id_user',$id)->delete();
        return redirect('abari_induk_user');
    }

//     public function destroy(abari_induk_user_model $akun, $id_user)
//     {
//         $data = $akun->find($id_user);    
//         $data->delete();
//         return redirect('abari_induk_user')->with('msg', 'Hapus'. $data->id_user.' berhasil');
//     }
 }