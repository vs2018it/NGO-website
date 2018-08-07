<?php

$to = "vs@2018it@gmail.com";
$name = $_POST['Name'];
$number = $_POST['Number'];
$email = $_POST['Email'];
$subject = 'Contact Form';
$content = $_POST['message'];
$msg = '"Name : ".$name."<br>Email : ".$email."<br>Number : ".$number."<br>Message : ".$content."<br>"';
mail($to,$subject,$msg);
echo "We will contact you soon !";
?>