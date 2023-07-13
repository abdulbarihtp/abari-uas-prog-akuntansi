<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbariIndukUserModel extends Model
{
    use HasFactory;
    protected $table ="abari_induk_user";
    protected $primaryKey ="id_user";

    public function tampil_data(){
        $query = \DB::table('abari_induk_user')->get();
        return $query;
    }
}
