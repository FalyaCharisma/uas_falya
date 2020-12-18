<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function detail_pesanan(){
        return $this->hasMany('App\DetailPesanan','pesanan_id','id');
    }
}
