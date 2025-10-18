<?php
include("baglanti.php");

if (isset($_POST["amacimizbaslik"], $_POST["amacimizparagraf"])) {
    $hbaslık = $_POST["amacimizbaslik"];
    $paragraf = $_POST["amacimizparagraf"];

    $ekle = "INSERT INTO amacimiz(hbaslık, paragraf) VALUES('" . $hbaslık . "','" . $paragraf . "')";

    if ($baglan->query($ekle) === true) {
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir')</script>";
        header("location:adminamac.php");
    } else {
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu</script>";
    }
}
else{
    echo 'kaydedilemedi';
}


// if ($_POST) {
//     $hbaslık = $_POST["amacimizbaslik"];
//     $paragraf = $_POST["amacimizparagraf"];

//     $ekle = "INSERT INTO amacimiz(hbaslık, paragraf) VALUES('" . $hbaslık . "','" . $paragraf . "')";

//     if ($baglan->query($ekle) === true) {
//         echo "<script>alert('Mesajınız başarı ile gönderilmiştir')</script>";
//     } else {
//         echo "<script>alert('Mesajınız gönderilirken bir hata oluştu</script>";
//     }
// }
// else{
//     echo 'kaydedilemedi';
// }
