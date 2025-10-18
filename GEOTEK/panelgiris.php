<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="assets/css/panelgiris.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="dist/css/panelgiris.css">
</head>

<body>
  <form action="panelgiris.php" method="post" class="form">
    <h2>Panel Giriş</h2>
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="usrnm">
    </div>


    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="password" placeholder="Şifre" name="psw">
    </div>

    <button type="submit" class="btn">Giriş Yap</button>
  </form>
  </form>
</body>

</html>

<?php

session_start();

if (isset($_POST["usrnm"], $_POST["psw"])) {
  if ($_POST["usrnm"] == "123" && $_POST["psw"] == "123" || $_POST["usrnm"] == "123" && $_POST["psw"] == "123" || $_POST["usrnm"] == "123" && $_POST["psw"] == "123") {
    $_SESSION["user"] = $_POST["usrnm"];
    header("location:yonetim.php");
  } else {
    echo "<script>alert('Kullanıcı adı veya şifre yanlış')</script>";
  }
}
?>