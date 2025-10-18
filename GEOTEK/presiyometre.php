<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>GEOTEK TEKNOLOJİ SAN. VE TİC.LTD.ŞTİ.</title>


  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <link rel="shortcut icon" type="x-icon" href="./assets/images/icon-logo.png">
</head>

<body>
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png" alt="">
            </a>
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" class="active">Ana Sayfa</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Hakkımızda</a>
                <ul class="sub-menu">
                  <li><a href="biz-kimiz.php">Biz Kimiz</a></li>
                  <li><a href="amacimiz.php">Amacımız</a></li>
                  <li><a href="referanslar.php">Referanslar</a></li>
                </ul>
              </li>
              <li class="has-sub">
                <a href="javascript:void(0)">Ürünler</a>
                <ul class="sub-menu">
                  <li><a href="presiyometre.php">Otomatik Presiyometre</a></li>
                </ul>

              <li class="has-sub">
                <a href="javascript:void(0)">Galeri</a>
                <ul class="sub-menu">
                  <li><a href="galeri.php">Fotoğraflar</a></li>
                  <li><a href="videolar.php">Videolar</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="politikalar.php">Politikalar</a></li>
              <li class="scroll-to-section"><a href="index.php#iletisim">İletişim</a></li>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>GPM-100 <br>Otomatik Presiyometre</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="main-services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="service-item">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <?php
                  include("baglanti.php");

                  $sec = "Select * From presiyometre_resim";
                  $sonuc = $baglan->query($sec);

                  if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                      echo '<a href="' . $cek['resim'] . '"_blank">
                <img src="' . $cek['resim'] . '" alt=""></a>';
                    }
                  }
                  ?>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="right-text-content">
                  <i class="fas fa-archive"></i>
                  <?php

                  include("baglanti.php");
                  $sec = "Select * From presiyometre";
                  $sonuc = $baglan->query($sec);

                  if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                      echo "<h4>" . $cek['baslik'] . "</h4>";
                    }
                  }
                  ?>
                  <p></p>
                  <ol>
                    <?php

                    include("baglanti.php");
                    $sec = "Select * From presiyometre";
                    $sonuc = $baglan->query($sec);

                    if ($sonuc->num_rows > 0) {
                      while ($cek = $sonuc->fetch_assoc()) {
                        echo "<ul>" . $cek['madde'] . "</ul>";
                      }
                    }
                    ?>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="service-item">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                  <i class="fas fa-archive"></i>
                  <?php

                  include("baglanti.php");
                  $sec = "Select * From ikipresiyometre";
                  $sonuc = $baglan->query($sec);

                  if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                      echo "<h4>" . $cek['baslik'] . "</h4>";
                    }
                  }
                  ?>
                  <ul>
                    <?php

                    include("baglanti.php");
                    $sec = "Select * From ikipresiyometre";
                    $sonuc = $baglan->query($sec);

                    if ($sonuc->num_rows > 0) {
                      while ($cek = $sonuc->fetch_assoc()) {
                        echo "<ul>" . $cek['madde'] . "</ul>";
                      }
                    }
                    ?>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image">
                  <?php
                  include("baglanti.php");

                  $sec = "Select * From ikipresiyometre_resim";
                  $sonuc = $baglan->query($sec);

                  if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                      echo '<a href="' . $cek['resim'] . '"_blank">
                <img src="' . $cek['resim'] . '" alt=""></a>';
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="service-item last-service">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <?php
                  include("baglanti.php");

                  $sec = "Select * From ucpresiyometre_resim";
                  $sonuc = $baglan->query($sec);

                  if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                      echo '<a href="' . $cek['resim'] . '"_blank">
                <img src="' . $cek['resim'] . '" alt=""></a>';
                    }
                  }
                  ?>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="right-text-content">
                  <i class="fas fa-archive"></i>
                  <?php

                  include("baglanti.php");
                  $sec = "Select * From ucpresiyometre";
                  $sonuc = $baglan->query($sec);

                  if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                      echo "<h4>" . $cek['baslik'] . "</h4>";
                    }
                  }
                  ?>
                  <ol>
                    <?php

                    include("baglanti.php");
                    $sec = "Select * From ucpresiyometre";
                    $sonuc = $baglan->query($sec);

                    if ($sonuc->num_rows > 0) {
                      while ($cek = $sonuc->fetch_assoc()) {
                        echo "<ul>" . $cek['madde'] . "</ul>";
                      }
                    }
                    ?>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <footer>
    <div class="conatiner-fluid">
      <div class="row">
        <div class="col-lg-12">
          <p>© GEOTEK Teknoloji, Tüm hakları saklıdır.
            <br><a href="https://www.instagram.com/ysfcpaa/">Yusuf ÇAPA</a> <a title="CSS Templates" target="_blank">tarafından tasarlandı</a> <a title="CSS Templates" target="_blank">ve dizayn edildi.</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
</body>