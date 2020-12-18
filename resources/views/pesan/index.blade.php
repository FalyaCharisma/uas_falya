<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Pesan</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="assets/css/stylemaster.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('list') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('list') }}">Pilihan Kamar</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $kamar->nama_kamar }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{ $kamar->gambar }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $kamar->nama_kamar }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($kamar->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $kamar->keterangan }}</td>
                                    </tr>
    
                                    <tr><script>
                                     $( function() {
                                          $( "#date" ).datepicker({
                                              dateFormat: "yy-mm-dd"});
                                            } );
                                        </script>
                                        <td>Tanggal Check In</td>
                                        <td>:</td>
                                       <td><input type="text" id="date"></td>
                                       </tr>

                                       <tr><script>
                                     $( function() {
                                          $( "#date2" ).datepicker({
                                              dateFormat: "yy-mm-dd"});
                                            } );
                                        </script>
                                        <td>Tanggal Check Out</td>
                                        <td>:</td>
                                       <td><input type="text" id="date2"></td>
                                       </tr>
                                       <tr>
                                         <td>
                                             <form method="post" action="{{ url('pesan') }}/{{ $kamar->id }}" >
                                            @csrf
                                            <td><input type="text" name="jumlah_pesan" class="form-control" required=""></td><br>
                                            <td><button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan Sekarang</button></td>
                                            @if(session()->has('status'))
                                            {{ session('status') }}
                                            @endif
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
