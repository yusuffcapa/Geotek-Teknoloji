<?php

include 'baglanti.php';

if (isset($_POST["ismi"], $_POST["link"])) {
    $ismi = $_POST["ismi"];
    $link = $_POST["link"];

    $ekle = "INSERT INTO video(ismi, link) VALUES ('" . $ismi . "','" . $link . "')";

    if ($baglan->query($ekle) === true) {
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir')</script>";
    } else {
        echo "<script>alert('Mesajınız gönderilemedi')</script>";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Yönetim Paneli</title>
</head>

<body class="hold-transition sidebar-mini">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="hareket">
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="yonetim.php" class="d-block">Yönetim</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Yönetim
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./panel.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mailler</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./dosya.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Görsel Menüsü</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./video-yukle.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Video Menüsü</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminbiz.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Biz Kimiz Menüsü</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminamac.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Amacımız Menüsü</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminpresiyometre.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ürünler Menüsü</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminiletisim.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>İletişim bilgileri Menüsü</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminanas.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ana Sayfa Menüsü</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminreferans.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Referanslar Menüsü</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <a class="cıkıs" href="./cikis.php">Çıkış yap</a>
            </div>
        </div>
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Video Menüsü</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                            <li class="breadcrumb-item active">Yönetim Paneli</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>

        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        <script src="dist/js/adminlte.js"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <script src="dist/js/demo.js"></script>
        <script src="dist/js/pages/dashboard3.js"></script>
        <script src="dist/js/pages/dashboard3.js"></script>
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>

        <main class="login-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <?php if (isset($_GET['resimHata'])) : ?>
                            <div class="alert alert-danger">
                                <?php echo $_GET['resimHata'] ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_GET['success'])) : ?>
                            <div class="alert alert-success">
                                İçerik başarıyla eklendi.
                            </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-header">Video Yükle</div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Video
                                            Adı</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="ismi" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Link
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="link" required>
                                        </div>
                                    </div>


                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Ekle
                                        </button>
                                    </div>
                                    <br>
                                </form>
                                <div class="col-md-6 offset-md-4">
                                    <a href="#yukleme">
                                        <button class="btn btn-primary">
                                            video nasıl yüklenir
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <div class="liste">
            <table id="customers" class="container">
                <?php

                $sec = "Select * From video";
                $sonuc = $baglan->query($sec);

                if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                        echo '
                    <tr>  
                        <td width="100" class="resim">  
                            ' . $cek['link'] . '
                        </td>
                        <td width="500">' . $cek['ismi'] . '</td>          
                        <td width="100"><a href="referans_sil.php?id=' . $cek['id'] . '" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>';
                    }
                } else {
                    echo '<table id="customers" class="container">
                <tr>
                    <td>VERİTABANI BOŞ</td>
                </tr>';
                }
                ?>
            </table>
        </div>

        <div class="container" id="yukleme">
            <label>VİDEO NASIL YÜKLENİR</label><br>
            <label>Önce youtubeden yüklemek istediğiniz videoya girin. Sonrasında alttaki resimde gösterilen yere tıklayın.</label><br>
            <img src="assets/images/yt-1.png" width="500px" alt=""><br>
            <label>Tıkladıktan sonra alttaki resimde görülen yerleştir kısmına tıklayın.</label><br>
            <img src="assets/images/yt-2.png" width="500px" alt=""><br>
            <label>Alttaki resimin sağ tarafında kırmızıyla işaretlenmiş olan yazıları kopyalayın.</label><br>
            <img src="assets/images/yt-3.png" width="500px" alt=""><br>
            <label>Bu şekilde bütün yazıları seçin ve kopyalayın.</label><br>
            <img src="assets/images/yt-4.png" width="500px" alt=""><br>
            <label>Video menüsünde bulunan link kısmına yapıştırıp videonun adını yazın ve ekleyin.</label><br>
            <img src="assets/images/yt-5.png" width="500px" alt=""><br>
        </div>
        <div class="col-md-8 offset-md-4">
            <a href="#top">
                <button class="btn btn-primary">
                    Yukarı çık
                </button>
            </a>
        </div>
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>

        <style>
            .cıkıs {
                background-color: #007bff;
                color: #fff;
                align-items: unset;
                border-radius: 5px;
                float: left;
                max-width: 35%;
                text-align: center;
                transition: 1s;
            }

            .cıkıs:hover {
                transition: .5s;
                background-color: #1E90FF;
            }
        </style>
        <style>
            .resim img {
                width: 120px;
                height: 120px;
                display: flex;
                margin: auto;
                object-fit: cover;
            }

            #customers {
                font-family: 'Poppins', sans-serif;
                border-collapse: collapse;
                width: 100%;
                text-align: center;
                word-wrap: break-word;
            }

            #customers td,
            #customers th {
                border: 1px solid #ddd;
                padding: 8px;
                font-family: 'Poppins', sans-serif;
                word-break: break-word;

            }

            #customers tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #customers tr:hover {
                background-color: #ddd;
            }

            #customers th {
                font-family: 'Poppins', sans-serif;
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #007bff;
                color: white;
            }

            .liste {
                margin-top: 40px;
                padding-bottom: 40px;
            }
        </style>
</body>

</html>

<!-- https://www.youtube.com/watch?v=4zUR2lzGuSk -->