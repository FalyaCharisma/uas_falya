@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan</title>
    <link rel="stylesheet" href="assets/css/stylereview.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
@section('content')
<div class="wrapper">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Woah! Dengan biaya yang murah saya dapat menikmati segala fasilitas yang lengkap.</p>
      <div class="content">
        <div class="info">
          <div class="name">Mingyu</div>
          <div class="job">Artist | Singer</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="uploads/review2.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Fasilitas lengkap dengan view yang indah membuat saya ingin kembali ke sini lagi untuk berlibur.</p>
      <div class="content">
        <div class="info">
          <div class="name">Jaehyun</div>
          <div class="job">Artist | Model</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="uploads/review1.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>Tunggu apalagi, yuk sekarang pesan di BaliNice untuk rencana liburanmu bersama keluarga!</p>
      <div class="content">
        <div class="info">
          <div class="name">Ayu</div>
          <div class="job">Artist | Actris</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
           <img src="uploads/review3.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="wrapper">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Pesan kamarnya dan dapatkan pelayanan istimewa dengan harga yang murah bangetttt.</p>
      <div class="content">
        <div class="info">
          <div class="name">Yeji</div>
          <div class="job">Writer | Copywriter</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="image">
        <img src="uploads/review6.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Fasilitas lengkap dengan harga yang murah membuat saya ingin kembali ke sini lagi untuk berlibur.</p>
      <div class="content">
        <div class="info">
          <div class="name">Seonho</div>
          <div class="job">Freelancer | Programmer</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="uploads/review4.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>Tempat yang indah dan sangat nyaman membuat saya betah untuk berlama-lama dan menambah waktu libur saya.</p>
      <div class="content">
        <div class="info">
          <div class="name">Suzy</div>
          <div class="job">Freelancer | Advertiser</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="uploads/review5.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <footer class="py-2 bg-dark ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; BaliNice 2020 By Falya Charismatul Ayza</p>
    </div>
    <!-- /.container -->
  </footer>
  @endsection
</body>
</html>