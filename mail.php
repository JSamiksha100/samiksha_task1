<?php 

include 'config.php';
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$formcontent="From: $Name \n Message: $Message";
$recipient = "aster.aria00@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $Email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>