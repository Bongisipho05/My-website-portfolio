<?php
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$number= $_POST['mobile'];


$to = "bongisiphoketani@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message   ."
    \r\n Mobile number =".  $number;

$headers = "From: noreply@riichinmindclub.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:thankyou.html");
?>