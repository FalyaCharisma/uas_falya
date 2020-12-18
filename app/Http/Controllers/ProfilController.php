<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = User::where('id', Auth::user()->id)->first();

    	return view('profil.index', compact('user'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'min:8','confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->nohp = $request->nohp;
        $user->usia = $request->usia;
        $user->alamat = $request->alamat;
    	$user->update();

        session()->flash('Profil Berhasil Diupdate', 'Berhasil!');
    	return redirect('profil');
    }
}
