<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ulasan(){
        return view('ulasan');
    }
}
