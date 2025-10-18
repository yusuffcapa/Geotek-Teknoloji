<?php
include("baglanti.php");


$id = $_GET['id'];
$sonuc = "DELETE FROM presiyometre_resim WHERE id=$id";

if($baglan->query($sonuc) === true){
    echo"<script> alert('Veri silindi geri yönlendiriliyorsunuz.')</script>";
    header("location:adminpresiyometre.php");
}
else{
    echo "Veri silinemedi.";
    echo "<a href='adminpresiyometre.php' class='btn btn-danger'>GERİ DÖN</a>";
};

?>
