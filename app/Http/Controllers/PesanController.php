<?php

namespace App\Http\Controllers;
use App\Kamar;
use App\Pesanan;
use App\User;
use App\DetailPesanan;
use Auth;
//use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$kamar = Kamar::where('id', $id)->first();

    	return view('pesan.index', compact('kamar'));
    }

    public function pesan(Request $request, $id)
    {	
    	$kamar = Kamar::where('id', $id)->first();
    	$tanggal = Carbon::now();

    	//validasi apakah melebihi stok
    	if($request->jumlah_pesan > $kamar->tersedia)
    	{
    		return redirect('pesan/'.$id);
    	}

    	//cek validasi
    	$cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_pesanan))
    	{
    		$pesanan = new Pesanan;
	    	$pesanan->user_id = Auth::user()->id;
	    	$pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
	    	$pesanan->jumlah_harga=0;
            $pesanan->kode = mt_rand(100, 999);
	    	$pesanan->save();
    	}
    	

    	//simpan ke database detail pesanan
    	$pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek detail pesanan
    	$cek_detail_pesanan = DetailPesanan::where('kamar_id', $kamar->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$detail_pesanan = new DetailPesanan;
	    	$detail_pesanan->kamar_id = $kamar->id;
	    	$detail_pesanan->pesanan_id = $pesanan_baru->id;
	    	$detail_pesanan->jumlah = $request->jumlah_pesan;
            $detail_pesanan->jumlah_harga = $kamar->harga*$request->jumlah_pesan;
            $detail_pesanan->save();
            
            return redirect('list');
    	}else 
    	{
    		$detail_pesanan = DetailPesanan::where('kamar_id', $kamar->id)->where('pesanan_id', $pesanan_baru->id)->first();

    		$detail_pesanan->jumlah = $detail_pesanan->jumlah+$request->jumlah_pesan;

    		//harga sekarang
    		$harga_detail_pesanan_baru = $barang->harga*$request->jumlah_pesan;
	    	$detail_pesanan->jumlah_harga = $detail_pesanan->jumlah_harga+$harga_detail_pesanan_baru;
	    	$detail_pesanan->update();
    	}

    	//jumlah total
    	$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$pesanan->jumlah_harga = $pesanan->jumlah_harga+$kamar->harga*$request->jumlah_harga;
    	$pesanan->update();
    	
        session()->flash('status', 'Task was successful!');
        return redirect('checkout');

    }

    public function checkout()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $detail_pesanans = [];
        if(!empty($pesanan))
        {
            $detail_pesanans= DetailPesanan::where('pesanan_id', $pesanan->id)->get();

        }
        
        return view('pesan.checkout', compact('pesanan', 'detail_pesanans'));
    }

    public function delete($id)
    {
        $detail_pesanan = DetailPesanan::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $detail_pesanan->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$detail_pesanan->jumlah_harga;
        $pesanan->update();


        $detail_pesanan->delete();

        //Alert::error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('checkout');
        session()->flash('status', 'Berhasil!');
    }

    //Konfirmasi pesanan
    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            //Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profil');
        }

        if(empty($user->nohp))
        {
            //Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profil');
        }

        if(empty($user->usia))
        {
           // Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profil');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $detail_pesanans= DetailPesanan::where('pesanan_id', $pesanan_id)->get();
        foreach($detail_pesanans as $detail_pesanan) {
            $kamar = Kamar::where('id', $detail_pesanan->kamar_id)->first();
            $kamar->tersedia = $kamar->tersedia-$detail_pesanan->jumlah;
            $kamar->update();
        }

       // Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$pesanan_id);

    }

    
}


