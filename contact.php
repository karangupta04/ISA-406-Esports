<?php

if($_POST["submit"]) {
    $recipient="chudzimj@miamioh.edu";
	// assign the destination email adress to a variable $recipient
	// replace email with whatever E-Sports admin wants it.
	
    $subject="Form to email message";
	// assign emai subject to a variable $subject
	
    $sender=$_POST["sender"];
	
    $senderEmail=$_POST["senderEmail"];
	// pass sender email from input form to a variable $senderEmail
	// using post method
	
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
	
	echo"Thank You!";
		
}

?>