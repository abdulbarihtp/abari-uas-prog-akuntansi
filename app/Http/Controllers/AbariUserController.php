<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbariUserModel;

class AbariUserController extends Controller
{
    public function index(){
        $myakun = new AbariUserModel();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('abari_user/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('abari_user/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_user')
        ->insert([
            'id_user' => $request->id_user,
            'user_name'  =>  $request->user_name,
            'password'  =>  $request->password,
            'level'  =>  $request->level,
        ]);
        return redirect('abari_user');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('abari_user')->where('id_user', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('abari_user/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('abari_user')->where('id_user',$request->id_user)
        ->update([
            'id_user' => $request->id_user,
            'user_name'  =>  $request->user_name,
            'password'  =>  $request->password,
            'level'  =>  $request->level,
        ]);
        return redirect('abari_user');
    }

    public function delete ($id){
        $query = \DB::table('abari_user')->where('id_user',$id)->delete();
        return redirect('abari_user');
    }

//     public function destroy(abari_user_model $akun, $id_user)
//     {
//         $data = $akun->find($id_user);    
//         $data->delete();
//         return redirect('abari_user')->with('msg', 'Hapus'. $data->id_user.' berhasil');
//     }
 }