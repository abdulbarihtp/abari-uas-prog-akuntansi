<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbariJurnalModel extends Model
{
    use HasFactory;
    protected $table ="abari_jurnal";
    protected $primaryKey ="id_jurnal";

    public function tampil_data(){
        $query = \DB::table('abari_jurnal')->get();
        return $query;
    }
}