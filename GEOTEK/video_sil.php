<?php
include("baglanti.php");


$id = $_GET['id'];
$sonuc = "DELETE FROM video WHERE id=$id";

if($baglan->query($sonuc) === true){
    echo"<script> alert('Veri silindi geri yönlendiriliyorsunuz.')</script>";
    header("location:video-yukle.php");
}
else{
    echo "Veri silinemedi.";
    echo "<a href='video-yukle.php' class='btn btn-danger'>GERİ DÖN</a>";
};

?>
