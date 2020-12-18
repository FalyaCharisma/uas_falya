<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    public function detail_pesanan(){
        return $this->hasMany('App\DetailPesanan','kamar_id','id');
    }
}
