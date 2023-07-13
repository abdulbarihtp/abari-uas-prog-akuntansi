<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbariAkunModel extends Model
{
    use HasFactory;
    protected $table ="abari_master_akun";
    protected $primaryKey ="nomor_akun";

    public function tampil_data(){
        $query = \DB::table('abari_master_akun')->get();
        return $query;
    }
}