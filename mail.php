<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message'];
$formcontent="From: $name \n Subject : $subject \n Message: $message";
$recipient = "sanidhyak7@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

if ($_POST['submit']) {				 
        if (mail($recipient, $subject, $formcontent, $mailheader)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } 
?>