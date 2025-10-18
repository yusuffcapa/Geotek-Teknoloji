<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "joseff1544@gmail.com";

$subject = "Mail from codeconia";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message; "\r\n phone =" . $phone;

$headers = "From: joseff1544@gmail.com" . "\r\n" . 
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>