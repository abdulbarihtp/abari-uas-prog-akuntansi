<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbariJurnalModel;

class AbariJurnalController extends Controller
{
    public function index(){
        $myakun = new AbariJurnalModel();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('abari_jurnal/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('abari_jurnal/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_jurnal')
        ->insert([
            'id_jurnal' => $request->id_jurnal,
            'nama_akun'  =>  $request->nama_akun,
            'jns_jurnal'  =>  $request->jns_jurnal,
            'tanggal'  =>  $request->tanggal,
        ]);
        return redirect('abari_jurnal');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('abari_jurnal')->where('id_jurnal', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('abari_jurnal/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_jurnal')->where('id_jurnal',$request->id_jurnal)
        ->update([
            'id_jurnal' => $request->id_jurnal,
            'nama_akun'  =>  $request->nama_akun,
            'jns_jurnal'  =>  $request->jns_jurnal,
            'tanggal'  =>  $request->tanggal,
        ]);
        return redirect('abari_jurnal');
    }

    public function delete ($id){
        $query = \DB::table('abari_jurnal')->where('id_jurnal',$id)->delete();
        return redirect('abari_jurnal');
    }

//     public function destroy(abari_jurnal_model $akun, $id_jurnal)
//     {
//         $data = $akun->find($id_jurnal);    
//         $data->delete();
//         return redirect('abari_jurnal')->with('msg', 'Hapus'. $data->id_jurnal.' berhasil');
//     }
 }