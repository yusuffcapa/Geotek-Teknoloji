<?php
if ($_SESSION["user"] == "") {
    echo "<script>window.location.href='cikis.php'</script>";
} else {
    include("baglanti.php");

    $idget = $_GET['id'];

    if (isset($_POST["hbaslık"], $_POST["paragrafs"])) {
        $hbaslık = $_POST["hbaslık"];
        $paragraf = $_POST["paragraf"];

        $ekle = "UPDATE biz_kimiz SET hbaslık='$hbaslık', paragraf='$paragraf' where id=$idget";

        if ($baglan->query($ekle) === true) {
            echo "<script>alert('Mesajınız başarı ile gönderilmiştir')</script>";
        } else {
            echo "<script>alert('Mesajınız gönderilirken bir hata oluştu</script>";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Yönetim Paneli</title>
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
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

        </div>
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Düzenle Paneli</h1>
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
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Düzenle</div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Başlık
                                    </label>
                                    <div class="col-md-6">
                                        <input <?php
                                                $id = $_GET['id'];
                                                $sec = "Select * From biz_kimiz where id=$id";
                                                $sonuc = $baglan->query($sec);

                                                if ($sonuc->num_rows > 0) {
                                                    while ($cek = $sonuc->fetch_assoc()) {
                                                        echo '
                                                        value="' . $cek["hbaslık"] . '"';
                                                    }
                                                }
                                                ?> type="text" class="form-control" name="baslik" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Paragraf</label>
                                    <div class="col-md-6">
                                        <input <?php
                                                $id = $_GET['id'];
                                                $sec = "Select * From biz_kimiz where id=$id";
                                                $sonuc = $baglan->query($sec);

                                                if ($sonuc->num_rows > 0) {
                                                    while ($cek = $sonuc->fetch_assoc()) {
                                                        echo '
                                                        value="' . $cek["paragraf"] . '"';
                                                    }
                                                }
                                                ?> type="text" class="form-control" name="paragraf" required>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Düzenle
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>