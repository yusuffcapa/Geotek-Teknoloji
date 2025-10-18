<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Yönetim PANELİ</title>

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
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Biz Kimiz Menüsü</h1>
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

    <form class="container" method="POST">
        <table id="customers" class="bizkimiz" method="post">
            <tr>
                <th>Başlık</th>
                <th>Paragraf</th>
                <th>Biz Kimiz</th>
            </tr>
            <tr>
                <td><input type="text" placeholder="Başlık" name="hbaslık"></td>
                <td width='800'><input type="text" placeholder="Paragraf" name="paragraf"></td>
                <td><button type="submit" name="duzenle" class="btn btn-info">Gönder</button></td>
            </tr>
        </table>
    </form>



    <form method="post">
        <table id='customers' class='container'>
            <tr>
                <th width="100">Başlık</th>
                <th>Paragraf</th>
                <th>Biz kimiz</th>
            </tr>
            <?php

            include("baglanti.php");

            if (isset($_POST["hbaslık"], $_POST["paragraf"])) {
                $hbaslık = $_POST["hbaslık"];
                $paragraf = $_POST["paragraf"];

                $ekle = "INSERT INTO biz_kimiz(hbaslık, paragraf) VALUES('" . $hbaslık . "','" . $paragraf . "')";

                if ($baglan->query($ekle) === true) {
                    echo "<script>alert('Mesajınız başarı ile gönderilmiştir')</script>";
                } else {
                    echo "<script>alert('Mesajınız gönderilirken bir hata oluştu</script>";
                }
            }


            $sec = "Select * From biz_kimiz";
            $sonuc = $baglan->query($sec);


            if ($sonuc->num_rows > 0) {
                while ($cek = $sonuc->fetch_assoc()) {
                    echo "
        <tr>
            <td>" . $cek['hbaslık'] . "</td>
            <td>" . $cek['paragraf'] . "</td>
            <td><a href='biz-sil.php?id=" . $cek['id'] . "' class='btn btn-danger'>Sil</a></td>
            
      ";
                }
            }
            ?>

            </tr>
        </table>
    </form>

    <main class="login-form">
        <div class="yuksek">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Görsel Yükle</div>
                            <div class="card-body">
                                <form action="biz_yukle.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Görsel</label>
                                        <div class="col-md-6">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="resim">
                                                <label class="custom-file-label">Seçiniz</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Ekle
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("baglanti.php");

        $sec = "Select * From biz_kimiz_resim";
        $sonuc = $baglan->query($sec);

        if ($sonuc->num_rows > 0) {
            while ($cek = $sonuc->fetch_assoc()) {
                echo '<table id="customers" class="container">
                    <tr>            
                        <td width="100"><a class="resim" target="_blank">
                            <img src="' . $cek['resim'] . '" alt="" /></a>
                        </td>
                        <td width="100"><a href="bizresim_sil.php?id=' . $cek['id'] . '" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>';
            }
        } else {
            echo '<table id="customers" class="container">
                <tr>
                    <td>VERİTABANI BOŞ</td>
                </tr>
              </table>';
        }
        ?>
        </div>
    </main>

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
        .yuksek{
            margin-top: 70px;
        }
        .resim img {
            width: 110px;
            height: 110px;
            display: flex;
            margin: auto;
            object-fit: cover;
        }

        #customers {
            font-family: 'Poppins', sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        #customers input {
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            font-family: 'Poppins', sans-serif;

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
            text-align: left;
            background-color: #007bff;
            color: white;
        }

        .bizkimiz {
            margin-top: 100px;
            width: auto;
        }
    </style>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard3.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script language="JavaScript">
        function uyari() {
            if (confirm("Bu kaydı silmek istediğinize emin misiniz?"))
                return true;
            else
                return false;
        }
    </script>
</body>

</html>