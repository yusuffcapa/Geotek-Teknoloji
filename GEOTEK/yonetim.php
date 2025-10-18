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
              <a href="yonetim.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Yönetim
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="panel.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mailler</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dosya.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Görsel Menüsü</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="video-yukle.php" class="nav-link">
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
                <li class="nav-item">
                  <a href="adminreferans.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Referanslar Menüsü</p>
                  </a>
                </li>

              </ul>
            </li>
            <a class="cıkıs" href="cikis.php">Çıkış yap</a>
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
    </div>
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Yönetim Paneli</h1>
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
</body>

</html>