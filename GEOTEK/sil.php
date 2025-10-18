<?php
include("baglanti.php");


$id = $_GET['id'];
$sonuc = "DELETE FROM image WHERE id=$id";

if($baglan->query($sonuc) === true){
    echo"<script> alert('Veri silindi geri yönlendiriliyorsunuz.')</script>";
    header("location:dosya.php");
}
else{
    echo "Veri silinemedi.";
    echo "<a href='dosya.php' class='btn btn-danger'>GERİ DÖN</a>";
};

?>
