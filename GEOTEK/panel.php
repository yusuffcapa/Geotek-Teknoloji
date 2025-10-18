<!DOCTYPE html>
<html>

<head>
  <title>YÖNETİM PANELİ</title>
</head>

<body>
  
  <style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900");

    body {
      font-family: 'Poppins', sans-serif;
    }

    #customers {
      font-family: 'Poppins', sans-serif;
      border-collapse: collapse;
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

    a {
      background-color: #007bff;
      color: #fff;
      font-size: 14px;
      padding: 12px 30px;
      float: right;
      border-radius: 10px;
      font-weight: 500;
      font-family: 'Poppins', sans-serif;
      text-decoration: none;
    }

    td {
      word-break: break-word;
      table-layout: fixed;
    }

    h1 {
      text-align: center;
    }
  </style>

  <h1>Mail Tablosu</h1>

  <table id="customers">

    <tr>
      <th>Tarih</th>
      <th>Ad Soyad</th>
      <th>Telefon Numarası</th>
      <th>E-Posta</th>
      <th>Mesaj</th>

    </tr>

    <?php

    session_start();

    if ($_SESSION["user"] == "") {
      echo "<script>window.location.href='cikis.php'</script>";
    } else {
      echo "Kullanıcı Adınız: " . $_SESSION['user'] . "<br>";
      echo "<a href='yonetim.php'>Yönetim Paneline Git</a><br><br><br>";
      include("baglanti.php");

      $sec = "Select * From iletisim";
      $sonuc = $baglan->query($sec);

      if ($sonuc->num_rows > 0) {
        while ($cek = $sonuc->fetch_assoc()) {
          echo "
  
        <tr>
          <td width='100'>" . $cek['tarih'] . "</td>
          <td width='200'>" . $cek['adsoyad'] . "</td>
          <td width='100'>" . $cek['telefon'] . "</td>
          <td width='200'>" . $cek['email'] . "</td>
          <td>" . $cek['mesaj'] . "</td>
        </tr> 
      
      ";
        }
      } else {
        echo "Veritabanında hiçbir veri bulunamadı.";
      }
    }
    ?>

  </table>
</body>

</html>