@extends('layouts.app')
<title>Detail Pemesanan</title>
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h5>Pesanan anda sudah berhasil! Silahkan lanjutkan ke pembayaran. <strong>Bank BCA : 3151312222</strong> Nominal : <strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if(!empty($pesanan))
                    <p>Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jangka Waktu</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($detail_pesanans as $detail_pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $detail_pesanan->jumlah }} Hari</td>
                                <td>Rp. {{ number_format($detail_pesanan->kamar->harga) }}</td>
                                <td>Rp. {{ number_format($detail_pesanan->jumlah_harga) }}</td>
                                
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5"><strong>Total Harga :</strong></td>
                                <td><strong>Rp. {{ number_format($detail_pesanan->jumlah_harga) }}</strong></td>
                                
                            </tr>
                            <tr>
                                <td colspan="5"><strong>Kode Unik :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->kode) }}</strong></td>
                                
                            </tr>
                             <tr>
                                <td colspan="5"><strong>Total yang harus ditransfer :</strong></td>
                                <td><strong>Rp. {{ number_format($detail_pesanan->jumlah_harga) }}</strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection