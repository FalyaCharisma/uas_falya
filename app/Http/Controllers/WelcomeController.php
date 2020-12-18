<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller{
    public function welcome(){
        return view ('welcome');
    }
}