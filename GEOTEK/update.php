<?php
include('baglanti.php');

if (isset($_POST["amacimizbaslik"], $_POST["amacimizparagraf"])) {
    $hbaslık = $_POST["amacimizbaslik"];
    $paragraf = $_POST["amacimizparagraf"];

    $ekle = "UPDATE amacimiz SET `baslik`= '" . $hbaslık . "',`paragraf`='" . $paragraf . "'";

    if ($baglan->query($ekle) === true) {
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir')</script>";
    } else {
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu</script>";
    }
}
