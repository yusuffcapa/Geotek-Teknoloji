<?php
include("baglanti.php");
$id = $_GET['id'];

if(isset($_POST['isim'],$_POST['resim'])){





$sonuc = "UPDATE image SET `isim`='".$isim."', `resim`='".$yeni_adi."' WHERE id=$id";


if($baglan->query($sonuc) === true){
    echo"<script> alert('Veri silindi geri yönlendiriliyorsunuz.')</script>";
    header("location:dosya.php");
}
else{
    echo "Veri silinemedi.";
    echo "<a href='dosya.php' class='btn btn-danger'>GERİ DÖN</a>";
}
};
