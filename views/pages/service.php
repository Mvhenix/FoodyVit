<?php 
session_start();

if ( !isset($_SESSION["login"])){
  header("Location: ../auth/login.php");
  exit;
}

require '../../database/function.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/mobile.css" />

    <!-- font -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;600;700&family=Raleway:wght@400;600;700&display=swap");
    </style>

    <title>Our Service | FoodyVit</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="./assets/FoodyVit..png" alt=""
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
            <a class="nav-link active" href="./index.html">Home</a>
            <a class="nav-link active">Menu</a>
            <a class="nav-link active" href="./service.html">Service</a>
            <a class="nav-link active" href="./contactus.html">Contact Us</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Banner Service -->
    <section id="banner-service">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h1 style="font-size: 60px"><span>Our</span> Service</h1>
            <p class="caption">
              Memberikan Layanan dengan Kualitas yang Terbaik
            </p>
            <img src="./assets/jeruk.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Banner Service -->

    <!-- Service -->
    <section id="service">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-6">
            <img src="./assets/price.png" alt="" />
            <h5>Discount System</h5>
            <p class="caption">
              kami memiliki sistem diskon <br />
              yang menguntungkan
            </p>
          </div>
          <div class="col-lg-6">
            <img src="./assets/cars.png" alt="" />
            <h5>Express System</h5>
            <p class="caption">
              Pengiriman Express untuk <br />
              pelanggan kami
            </p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-6">
            <img src="./assets/box.png" alt="" />
            <h5>Healthy System</h5>
            <p class="caption">
              Menu makanan yang sehat <br />
              untuk kebugaran tubuh
            </p>
          </div>
          <div class="col-lg-6">
            <img src="./assets/medal.png" alt="" />
            <h5>Product System</h5>
            <p class="caption">
              Semua produk kami terjaga <br />
              kualitasnya
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Service -->

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
              <img src="./assets/FoodyVit..png" alt="" />
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
                <a href="https://www.youtube.com/Miawaug"
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
                © FoodVit All Rights Reserved Synfood 2021
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Footer -->

    <script src="./js/bootstrap.js"></script>
  </body>
</html>
