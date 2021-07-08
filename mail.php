<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$project= $_POST['project'];
$message= $_POST['message'];
$to = "mahfuzurrahman.writter@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@demo2.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.html");
?>