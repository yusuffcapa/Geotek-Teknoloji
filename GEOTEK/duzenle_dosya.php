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

    <title>Yönetim Paneli</title>
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
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Görsel Menüsü</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="yonetim.php">Ana Sayfa</a></li>
                            <li class="breadcrumb-item active">Yönetim Paneli</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>


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
                        <div class="card">
                            <div class="card-header">Görsel Yükle</div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <!-- <label for="id" class="col-md-4 col-form-label text-md-right">İd</label> -->
                                        <div class="col-md-6">
                                            <?php
                                            // include('baglanti.php');

                                            // $id = $_GET['id'];
                                            // $sec = "Select * From image where id='$id'";
                                            // $sonuc = $baglan->query($sec);

                                            // if ($sonuc->num_rows > 0) {
                                            //     while ($cek = $sonuc->fetch_assoc()) {
                                            //         echo "<input type='hidden' class='form-control' name='id'>";
                                            //     }
                                            // }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Resim
                                            Adı</label>
                                        <div class="col-md-6">
                                            <?php
                                            include('baglanti.php');

                                            $id = $_GET['id'];
                                            $sec = "Select * From image where id='$id'";
                                            $sonuc = $baglan->query($sec);

                                            if ($sonuc->num_rows > 0) {
                                                while ($cek = $sonuc->fetch_assoc()) {
                                                    echo "<input type='text' class='form-control' name='isim' value=$cek[isim] required>";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>

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
                                        <button type="submit" class="btn btn-primary">Güncelle</button>
                                        <a href="dosya.php" class="btn btn-warning">
                                            Geri
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php

            include("baglanti.php");

            if ($_GET) {
                if ($_POST) {
                    // $isim = $_POST['isim'];
                    // $resim = $_POST['resim'];
                    if (isset($_FILES['resim'])) {
                        $hata = $_FILES['resim']['error']; //resim inputundan gönderilen hatayı aldık.
                        if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                            echo 'Resim gönderilirken bir hata gerçekleşti.';
                        } else {
                            $resimBoyutu = $_FILES['resim']['size']; // resim boyutunu öğrendik
                            $isim = $_POST['isim'];
                            if ($resimBoyutu > (1024 * 1024 * 5)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 5MB den büyük olamaz.';
                            } else {
                                $tip = $_FILES['resim']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['resim']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.


                                $yeni_adi = "assets/images/galeri/" . time() . "." . $uzantisi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                    if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yeni_adi)) {
                                        //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                        $id = $_GET['id'];
                                        $ekle = "UPDATE image SET `isim`= '" . $isim . "',`resim`='" . $yeni_adi . "' where id =$id";
                                        if ($baglan->query($ekle) === true) {
                                            echo "<script>alert('Görseliniz yüklenmiştir. 1 saniye sonra yönlendiriliyorsunuz')</script>";
                                        }
                                    } else echo 'Görsel yüklenirken bir hata oluştu.';
                                } else {
                                    echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                            }
                        }
                    }
                }
            } else {
                echo 'submit edilemedi';
            }


            include("baglanti.php");

            // $id = $_GET['id'];
            $sec = "Select * From image where id='$id'";
            $sonuc = $baglan->query($sec);

            if ($sonuc->num_rows > 0) {
                while ($cek = $sonuc->fetch_assoc()) {
                    echo '<table id="customers" class="container">
                    <tr>            
                        <td width="100"><a class="resim" target="_blank">
                            <img src="' . $cek['resim'] . '" alt="" /></a>
                        </td>
                        <td width="500">' . $cek['isim'] . '</td>
                        <td width="100"><a href="sil.php?id=' . $cek['id'] . '" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>';
                }
            } else {
                echo '<table id="customers" class="container">
                <tr>
                    <td>RESİM YOK</td>
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
    </style>
</body>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>

</html>