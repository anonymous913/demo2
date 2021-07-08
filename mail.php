<?php
//get data from form  

$email= $_POST['email'];

$to = "mahfuzurrahman.writter@gmail.com";
$subject = "Mail From website";
$txt ="Email = " . $email;

$headers = "From: noreply@demo2.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.html");
?>