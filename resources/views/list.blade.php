@extends('layouts.app')
<title>Pilihan Kamar</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($kamars as $kamar)
        <div class="col-md-4">
            <div class="card">
              <img src="{{ url('uploads') }}/{{ $kamar->gambar }}" class="card-img-top" alt="..." width="286" height="180">
              <div class="card-body">
                <h5 class="card-title">{{ $kamar->nama_kamar }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($kamar->harga)}} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $kamar->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $kamar->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
<footer class="py-2 bg-dark ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; BaliNice 2020 By Falya Charismatul Ayza</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection