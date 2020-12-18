<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    public function kamar(){
        return $this->belongsTo('App\Kamar','kamar_id','id');
    }
    public function pesanan(){
        return $this->belongsTo('App\Pesanan','pesanan_id','id');
    }
}
