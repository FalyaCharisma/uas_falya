@extends('layouts.app')
<title>Home</title>

<link href="assets/css/style.css" rel="stylesheet" />
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hallo! Selamat Datang di Beranda Kami</div>

                <div class="card-body">
                <div id="slider">
                     <figure>
                        <img src="assets/img/balia.jpg" style="width: 20%; height: 500px;">    
                        <img src="assets/img/bali2.jpg" style="width: 20%; height: 500px;">
                        <img src="assets/img/bali3.jpg" style="width: 20%; height: 500px;">
                        <img src="assets/img/bali4.jpg" style="width: 20%; height: 500px;">
                        <img src="assets/img/bali5.jpg" style="width: 20%; height: 500px;">
                     </figure>
                </div>
                <hr>
                <p>The company has established partnerships with more than 100 domestic and international airlines, serving more than 200,000 routes worldwide. It also has the largest direct accommodation inventory, varying from hotels, apartments, guest houses, homestays, to villas and resorts. Traveloka provides more than 40 payment options for customers in Indonesia, Thailand, Vietnam, Malaysia, Singapore and the Philippines, with 24/7 assistance from local customer service in their native languages.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="py-2 bg-dark ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; BaliNice 2020 By Falya Charismatul Ayza</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection
