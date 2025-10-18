<?php
include("baglanti.php");


$id = $_GET['id'];
$sonuc = "DELETE FROM referans WHERE id=$id";

if($baglan->query($sonuc) === true){
    echo"<script> alert('Veri silindi geri yönlendiriliyorsunuz.')</script>";
    header("location:adminreferans.php");
}
else{
    echo "Veri silinemedi.";
    echo "<a href='adminreferans.php' class='btn btn-danger'>GERİ DÖN</a>";
};

?>
