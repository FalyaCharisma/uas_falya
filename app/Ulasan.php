<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    public function ulasan(){
        return $this->belongsTo('App\Ulasan','id');
    }
}
