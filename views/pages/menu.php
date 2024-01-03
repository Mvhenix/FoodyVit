<?php 
session_start();

if ( !isset($_SESSION["login"])){
  header("Location: ../auth/login.php");
  exit;
}
$username = $_SESSION['login'];

require '../../database/function.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/mobile.css" />

    <!-- font -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;600;700&family=Raleway:wght@400;600;700&display=swap");
    </style>

    <title>FoodyVit</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="../../assets/FoodyVit.png" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="./index.php">Home</a>
            <a class="nav-link active" href="./menu.php">Menu</a>
            <a class="nav-link active" href="./service.php">Service</a>
            <a class="nav-link active" href="./contactus.php">Contact Us</a>
          </div>
          <div class="drop-down">
            <div id="dropDown" class="drop-down_button">
              span.drop
            </div>
            <p><?= $username; ?> </p>
            <p><a href="../auth/logout.php">Logout</a></p>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Banner -->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="deskripsi-banner">
              <h1><span>Kesegaran</span> disetiap Gigitannya!</h1>
              <p class="caption">
                Buah - buahan yang segar membawa Mood yang menyenangkan disetiap
                gigitannya.
              </p>
              <button type="button" class="btn btn-warning">
                Lihat Menu <i class="bi bi-box-arrow-in-right"></i>
              </button>
              <a class="link" href="">Lihat Detail</a>
            </div>
          </div>
          <div class="col-lg-7">
            <img src="../../assets/banner.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Banner -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <img src="../../assets/Semangka.png" alt="" />
          </div>
          <div class="col-lg-5">
            <div class="deskripsi-about">
              <p><span>Kualitas kesegaran buah 100%</span></p>
              <h1>Menggunakan Buah Pilihan yang Terbaik</h1>
              <p class="caption">
                Dipetik dan dipilih langsung Oleh Petani terbaik kami untuk
                menjaga kualitas dan kesegaran buah
              </p>
              <button type="button" class="btn btn-warning">
                Selengkapnya <i class="bi bi-box-arrow-in-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- Menu -->
    <section id="menu">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>
              Menu Terbaik Dengan <br />
              Rasa <span>Extraordinary</span>
            </h1>
            <p class="caption">
              Dipetik dan dipilih langsung Oleh Petani terbaik kami untuk
              menjaga kualitas dan kesegaran buah
            </p>
          </div>
        </div>
        <div class="row text-end">
          <div class="col">
            <a class="link" href=""
              ><i class="bi bi-list" style="color: black; font-size: 20px"></i>
              Lihat Menu</a
            >
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-3">
            <div class="card">
              <img src="../../assets/mixed.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Creamy Salad</h5>
                <p class="card-text">Harga : IDR 100k</p>
                <a href="#" class="btn btn-warning">Order Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <img src="../../assets/mixed.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Mayo Salad</h5>
                <p class="card-text">Harga : IDR 150k</p>
                <a href="#" class="btn btn-warning">Order Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <img src="../../assets/mixed.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Reddish Salad</h5>
                <p class="card-text">Harga : IDR 200k</p>
                <a href="#" class="btn btn-warning">Order Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <img src="../../assets/mixed.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Mixed Salad</h5>
                <p class="card-text">Harga : IDR 300k</p>
                <a href="#" class="btn btn-warning">Order Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Menu -->

    <!-- Info -->
    <section id="info">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h1>
              Dapatkan Informasi
              <span
                >Seputar <br />
                Kebugaran</span
              >
              Melalui Newsletter Kami
            </h1>
            <div class="input-group flex-nowrap">
              <input
                type="text"
                class="form-control"
                placeholder="Ketik Email"
                aria-label="Username"
                aria-describedby="addon-wrapping"
              />
            </div>
            <a href="#" class="btn btn-warning">Submit</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Info -->

    <!-- Footer -->
    <section id="footer">
      <hr style="border: 2px solid #fdc20c" />
      <div class="container">
        <div class="deskripsi-footer">
          <div class="row">
            <div class="col-lg-6">
              <a href="#"><img src="../../assets/FoodyVit.png" alt=""/></a>
              <p class="caption">
                Kapanpun, Dimanapun, Nikmati <br />
                Kesegaran Buahnya!
              </p>
              <p>
                <a href="https://www.facebook.com"
                  ><i class="bi bi-facebook"></i
                ></a>
                <a href="https://www.instagram.com/Mvhenix"
                  ><i class="bi bi-instagram"></i
                ></a>
                <a href="https://www.twiiter.com"
                  ><i class="bi bi-twitter"></i
                ></a>
                <a href="https://www.youtube.com/Miawaug" target="_blank"
                  ><i class="bi bi-youtube"></i
                ></a>
              </p>
            </div>
            <div class="col-lg-2">
              <h5>Information</h5>
              <p class="caption">About Us</p>
              <p class="caption">More Search</p>
              <p class="caption">Testimonial</p>
              <p class="caption">Event</p>
            </div>
            <div class="col-lg-2">
              <h5>Helpful Links</h5>
              <p class="caption">Services</p>
              <p class="caption">Support</p>
              <p class="caption">Terms & Condition</p>
              <p class="caption">Privacy</p>
            </div>
            <div class="col-lg-2">
              <h5>Our Menu</h5>
              <p class="caption">Salad</p>
              <p class="caption">Jus</p>
              <p class="caption">Mixed Fruit</p>
              <p class="caption">Es Buah</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h5 style="font-family: poppins; font-size: 16px">
                &copy; FoodVit All Rights Reserved Synfood 2021
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Footer -->

    <script src="../../js/bootstrap.js"></script>
  </body>
</html>
