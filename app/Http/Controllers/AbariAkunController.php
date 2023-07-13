<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbariAkunModel;

class AbariAkunController extends Controller
{
    public function index(){
        $myakun = new AbariAkunModel();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('abari_akun/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('abari_akun/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_master_akun')
        ->insert([
            'nomor_akun' => $request->nomor_akun,
            'nama_akun'  =>  $request->nama_akun,
            'tipe'  =>  $request->tipe,
            'induk'  =>  $request->induk,
            'level'  =>  $request->level,
            'kelompok'  =>  $request->kelompok,
        ]);
        return redirect('abari_akun');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('abari_master_akun')->where('nomor_akun', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('abari_akun/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_master_akun')->where('nomor_akun',$request->nomor_akun)
        ->update([
            'nomor_akun' => $request->nomor_akun,
            'nama_akun'  =>  $request->nama_akun,
            'tipe'  =>  $request->tipe,
            'induk'  =>  $request->induk,
            'level'  =>  $request->level,
            'kelompok'  =>  $request->kelompok,
        ]);
        return redirect('abari_akun');
    }

    public function delete ($id){
        $query = \DB::table('abari_master_akun')->where('nomor_akun',$id)->delete();
        return redirect('abari_akun');
    }

//     public function destroy(abari_akun_model $akun, $nomor_akun)
//     {
//         $data = $akun->find($nomor_akun);    
//         $data->delete();
//         return redirect('abari_akun')->with('msg', 'Hapus'. $data->nomor_akun.' berhasil');
//     }
 }