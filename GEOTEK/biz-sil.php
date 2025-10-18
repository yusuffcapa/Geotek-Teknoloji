<?php
include("baglanti.php");


$id = $_GET['id'];
$sonuc = "DELETE FROM biz_kimiz WHERE id=$id";

if($baglan->query($sonuc) === true){
    echo"<script> alert('Veri silindi geri yönlendiriliyorsunuz.')</script>";
    header("location:adminbiz.php");
}
else{
    echo "Veri silinemedi.";
    echo "<a href='adminbiz.php' class='btn btn-danger'>GERİ DÖN</a>";
};

?>
