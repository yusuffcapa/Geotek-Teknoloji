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
                            <li class="scroll-to-section"><a href="index.php #iletisim">İletişim</a></li>
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
                        <h2>Amacımız</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="top-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <?php
                        include("baglanti.php");

                        $sec = "Select * From amacimiz_resim";
                        $sonuc = $baglan->query($sec);

                        if ($sonuc->num_rows > 0) {
                            while ($cek = $sonuc->fetch_assoc()) {
                                echo '<img src="' . $cek['resim'] . '" alt="">';
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <?php

                                include("baglanti.php");
                                $sec = "Select * From amacimiz";
                                $sonuc = $baglan->query($sec);

                                if ($sonuc->num_rows > 0) {
                                    while ($cek = $sonuc->fetch_assoc()) {
                                        echo "<span>" . $cek['hbaslık'] . "</span>";
                                    }
                                }
                                ?>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <?php

                                    include("baglanti.php");
                                    $sec = "Select * From amacimiz";
                                    $sonuc = $baglan->query($sec);

                                    if ($sonuc->num_rows > 0) {
                                        while ($cek = $sonuc->fetch_assoc()) {
                                            echo "<p>" . $cek['paragraf'] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© GEOTEK Teknoloji, Tüm hakları saklıdır.
                        <br><a href="https://www.instagram.com/ysfcpaa/">Yusuf ÇAPA</a> <a title="CSS Templates" target="_blank">tarafından tasarlandı</a> <a title="CSS Templates" target="_blank">ve dizayn
                            edildi.</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--SCRİPTLER-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>

</body>