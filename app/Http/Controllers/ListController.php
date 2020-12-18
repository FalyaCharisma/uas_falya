<?php

namespace App\Http\Controllers;

use App\Kamar;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(){
        $kamars = Kamar::paginate(10);
        return view('list', compact('kamars'));
    }
}
