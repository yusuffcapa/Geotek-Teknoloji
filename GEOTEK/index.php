<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GEOTEK TEKNOLOJİ SAN. VE TİC.LTD.ŞTİ.</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/fontawesome.css" />
    <link rel="stylesheet" href="./assets/css/templatemo-574-mexant.css" />
    <link rel="stylesheet" href="./assets/css/owl.css" />
    <link rel="stylesheet" href="./assets/css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/iletisim.css" />
    <link rel="stylesheet" href="./assets/css/partners.css">
    <link rel="shortcut icon" type="x-icon" href="./assets/images/icon-logo.png">
    <link rel="stylesheet" href="./assets/css/cerez.css" type="text/css">
</head>


<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" alt="" />
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="index.php" class="active">Ana Sayfa</a>
                            </li>
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
                                <ul class="sub-2 sub-menu">
                                    <li>
                                        <a href="presiyometre.php">Otomatik Presiyometre</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Galeri</a>
                                <ul class="sub-menu">
                                    <li><a href="galeri.php">Fotoğraflar</a></li>
                                    <li><a href="videolar.php">Videolar</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section">
                                <a href="politikalar.php">Politikalar</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <?php

                include("baglanti.php");
                $sec = "Select * From anasayfa_resim";
                $sonuc = $baglan->query($sec);

                if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                        echo '<div class="slide-inner" style="background-image: url(' . $cek["resim"] . ')">';
                    }
                }
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="header-text">
                                <?php

                                include("baglanti.php");
                                $sec = "Select * From anasayfa_bir";
                                $sonuc = $baglan->query($sec);

                                if ($sonuc->num_rows > 0) {
                                    while ($cek = $sonuc->fetch_assoc()) {
                                        echo "<h2>
                                            <em>" . $cek['baslikbir'] . "</em>" . $cek['baslikiki'] . "
                                        </h2>";
                                    }
                                }
                                ?>
                                <div class="div-dec"></div>
                                <?php

                                include("baglanti.php");
                                $sec = "Select * From anasayfa_bir";
                                $sonuc = $baglan->query($sec);

                                if ($sonuc->num_rows > 0) {
                                    while ($cek = $sonuc->fetch_assoc()) {
                                        echo "
                                            <p>" . $cek['paragraf'] . "</p>";
                                    }
                                }
                                ?>
                                <div class="buttons">
                                    <div class="green-button">
                                        <a href="iletisime-gecin.php">Bize Ulaşın</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="swiper-slide">
            <?php

            include("baglanti.php");
            $sec = "Select * From anasayfa_resimiki";
            $sonuc = $baglan->query($sec);

            if ($sonuc->num_rows > 0) {
                while ($cek = $sonuc->fetch_assoc()) {
                    echo '<div class="slide-inner" style="background-image: url(' . $cek["resim"] . ')">';
                }
            }
            ?>
            <div class="container" id="top">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-text">
                            <?php

                            include("baglanti.php");
                            $sec = "Select * From anasayfa_iki";
                            $sonuc = $baglan->query($sec);

                            if ($sonuc->num_rows > 0) {
                                while ($cek = $sonuc->fetch_assoc()) {
                                    echo "<h2>
                                                <em>" . $cek['baslikbir'] . "</em>" . $cek['baslikiki'] . "</h2>";
                                }
                            }
                            ?>

                            <div class="div-dec"></div>
                            <?php

                            include("baglanti.php");
                            $sec = "Select * From anasayfa_iki";
                            $sonuc = $baglan->query($sec);

                            if ($sonuc->num_rows > 0) {
                                while ($cek = $sonuc->fetch_assoc()) {
                                    echo "
                                                <p>" . $cek['paragraf'] . "</p>";
                                }
                            }
                            ?>
                            <div class="buttons">
                                <div class="green-button">
                                    <a href="iletisime-gecin.php">Bize Ulaşın</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-slide">
        <?php

        include("baglanti.php");
        $sec = "Select * From anasayfa_resimuc";
        $sonuc = $baglan->query($sec);

        if ($sonuc->num_rows > 0) {
            while ($cek = $sonuc->fetch_assoc()) {
                echo '<div class="slide-inner" style="background-image: url(' . $cek["resim"] . ')">';
            }
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="header-text">
                        <?php

                        include("baglanti.php");
                        $sec = "Select * From anasayfa_uc";
                        $sonuc = $baglan->query($sec);

                        if ($sonuc->num_rows > 0) {
                            while ($cek = $sonuc->fetch_assoc()) {
                                echo "<h2>
                                                <em>" . $cek['baslikbir'] . "</em>" . $cek['baslikiki'] . "</h2>";
                            }
                        }
                        ?>

                        <div class="div-dec"></div>
                        <?php

                        include("baglanti.php");
                        $sec = "Select * From anasayfa_uc";
                        $sonuc = $baglan->query($sec);

                        if ($sonuc->num_rows > 0) {
                            while ($cek = $sonuc->fetch_assoc()) {
                                echo "
                                                    <p>" . $cek['paragraf'] . "</p>";
                            }
                        }
                        ?>
                        <div class="buttons">
                            <div class="green-button">
                                <a href="iletisime-gecin.php">Bize Ulaşın</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!--ANA MENÜ SONU-->

    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a href="./belgeler/Türkçe.pdf">
                        <div class="service-item">
                            <i class="fa-solid fa-file-pdf" style="color: #f48c2e;"></i>
                            <h4>Türkçe broşürümüze buradan ulaşabilirsiniz.</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="./belgeler/İngilizce.pdf">
                        <div class="service-item">
                            <i class="fa-solid fa-file-pdf" style="color: #f48c2e;"></i>
                            <h4>İngilizce broşürümüze buradan ulaşabilirsiniz.</h4>
                        </div>
                    </a>
                </div>
            </div>
    </section>

    <div class="container">
        <div class="iletisim" id="iletisim">
            <a class="iletisim-item" href="https://www.instagram.com/geotekteknoloji/" target="_blank">
                <img src="assets/images/instagram.png" />
            </a>
            <a class="iletisim-item" href="https://www.youtube.com/channel/UCInONgHOmPHMLiJD4aCROvQ/featured" target="_blank">
                <img src="assets/images/youtube.png" />
            </a>
            <a class="iletisim-item" href="https://www.linkedin.com/in/geotek-teknoloji-936815215/" target="_blank">
                <img src="assets/images/linkedin.png" />
            </a>
        </div>
    </div>

    <section class="map">
        <div class="row">
            <div class="col-lg-12">
                <div class="mapouter" id="map">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=100. yıl bulvarı ostim teknopark turkuaz bina&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections NYT</a>
                    </div>
                </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        height: 400px !important;
                    }
                </style>
                <div class="col-lg-10 offset-lg-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="info-item">
                                    <i class="fa fa-envelope"></i>
                                    <h4>E-posta Adresimiz</h4>
                                    <?php
                                    include("baglanti.php");
                                    $sec = "Select * From bilgiler";
                                    $sonuc = $baglan->query($sec);

                                    if ($sonuc->num_rows > 0) {
                                        while ($cek = $sonuc->fetch_assoc()) {
                                            echo '<a href="#">' . $cek["email"] . '</a>
                                            <br> ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-item">
                                    <i class="fa fa-phone"></i>
                                    <h4>Telefon Numarası</h4>

                                    <?php
                                    include("baglanti.php");
                                    $sec = "Select * From bilgiler";
                                    $sonuc = $baglan->query($sec);

                                    if ($sonuc->num_rows > 0) {
                                        while ($cek = $sonuc->fetch_assoc()) {
                                            echo '<a href="#">' . $cek["telefon"] . '</a>
                                            <br> ';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-item">
                                    <i class="fa fa-map-marked-alt"></i>
                                    <h4>Adres</h4>

                                    <?php
                                    include("baglanti.php");
                                    $sec = "Select * From bilgiler";
                                    $sonuc = $baglan->query($sec);

                                    if ($sonuc->num_rows > 0) {
                                        while ($cek = $sonuc->fetch_assoc()) {
                                            echo '<a href="#">' . $cek["adres"] . '</a><br>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <!-- <section class="contact-us-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>Bize Ulaşın</h6>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <form id="contact" action="index.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Ad Soyad" autocomplete="on" required />
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="phone" name="phone" id="phone" placeholder="Telefon Numarası" autocomplete="on" required />
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Posta" required="" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="msg" id="message" placeholder="Mesajınız"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">
                                        Mesajı gönder
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        © GEOTEK Teknoloji, Tüm hakları saklıdır.<br />
                        <a title="CSS Templates" href="https://www.instagram.com/ysfcpaa/" target="_blank">Yusuf
                            ÇAPA</a>
                        <a title="CSS Templates" target="_blank">tarafından tasarlandı</a>
                        <a title="CSS Templates" target="_blank">ve dizayn edildi.</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--scriptler-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script>
        var interleaveOffset = 0.1;

        var swiperOptions = {
            loop: true,
            speed: 1000,
            grabCursor: true,
            watchSlidesProgress: true,
            mousewheelControl: true,
            keyboardControl: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
                progress: function() {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                    }
                },
                touchStart: function() {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function(speed) {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                            speed + "ms";
                    }
                },
            },
        };

        var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>
<script type="text/javascript" src="assets/js/cerez.js"></script> 
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
"palette": {
"popup": {
"background": "#f48c2e", // şerit arkaplan rengi
"text": "#ffffff" // şerit üzerindeki yazı rengi
},
"button": {
"background": "#43ba7f", // buton arkaplan rengi.
//"border": "#14a7d0", arkaplan rengini transparent yapıp çerçeve kullanabilirsiniz.
"text": "#ffffff" // buton yazı rengi
}
},
"theme": "classic", // kullanabileceğiniz temalar block, edgeless, classic
// "type": "opt-out", gizle uyarısını aktif etmek için
// "position": "top", aktif ederseniz uyarı üst kısımda görünür
// "position": "top", "static": true, aktif ederseniz uyarı üst kısımda sabit olarak görünür
// "position": "bottom-left", aktif ederseniz uyarı solda görünür
//"position": "bottom-right", aktif ederseniz uyarı sağda görünür
"content": {
"message": "Sitemizden en iyi şekilde faydalanabilmeniz için çerezler kullanılmaktadır. Bu siteye giriş yaparak çerez kullanımını kabul etmiş sayılıyorsunuz.",
"dismiss": "Tamam",
"link": "Daha fazla bilgi",
"href": "politikalar.php"
}
})});
</script>

</body>

</html>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include('baglanti.php');


if (isset($_POST["name"], $_POST["phone"], $_POST["email"], $_POST["msg"])) {
    $adsoyad = $_POST["name"];
    $telefon = $_POST["phone"];
    $email = $_POST["email"];
    $mesaj = $_POST["msg"];

    $ekle = "INSERT INTO iletisim(adsoyad, telefon, email, mesaj) VALUES ('" . $adsoyad . "','" . $telefon . "','" . $email . "','" . $mesaj . "')";

    if ($_POST['name'] && $_POST['phone'] && $_POST['email'] && $_POST['msg']) {


        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->CharSet = 'UTF-8';
            $mail->SMTPDebug = 0; // debug on - off
            $mail->isSMTP();
            $mail->Host = 'smtpout.secureserver.net'; // SMTP sunucusu örnek : mail.alanadi.com
            $mail->SMTPAuth = true; // SMTP Doğrulama
            $mail->Username = 'info@geotekteknoloji.com'; // Mail kullanıcı adı
            $mail->Password = 'Geotek2020'; // Mail şifresi
            $mail->SMTPSecure = 'tls'; // Şifreleme
            $mail->Port = 465; // SMTP Port
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //Alıcılar
            $mail->setfrom($_POST['email'], 'Mail');
            $mail->addAddress('info@geotekteknoloji.com');
            //İçerik
            $mail->isHTML(true);
            $mail->Subject = "Teklif alın";
            $mail->Body = "İsim Soyisim: " . $_POST['name'] . "<br>Telefon: " . $_POST['phone'] . "<br>E-Posta: " . $_POST['email'] . "<br>Mesaj: <br>" . $_POST['msg'];

            $mail->send();
        } catch (Exception $e) {
            echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
        }
    }
    if ($baglan->query($ekle) === true) {
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir')</script>";
    } else {
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu</script>";
    }
}

?>