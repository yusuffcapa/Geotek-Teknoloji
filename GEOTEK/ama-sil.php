<?php
include("baglanti.php");


$id = $_GET['id'];
$sonuc = "DELETE FROM amacimiz WHERE id=$id";

if($baglan->query($sonuc) === true){
    echo"<script> alert('Veri silindi geri yönlendiriliyorsunuz.')</script>";
    header("location:adminamac.php");
}
else{
    echo "Veri silinemedi.";
    echo "<a href='adminamac.php' class='btn btn-danger'>GERİ DÖN</a>";
};

?>
