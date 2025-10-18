<?php
include("baglanti.php");


$id = $_GET['id'];
$sonuc = "DELETE FROM bilgiler WHERE id=$id";

if($baglan->query($sonuc) === true){
    echo"<script> alert('Veri silindi geri yönlendiriliyorsunuz.')</script>";
    header("location:adminiletisim.php");
}
else{
    echo "Veri silinemedi.";
    echo "<a href='adminiletisim.php' class='btn btn-danger'>GERİ DÖN</a>";
};

?>
