<?php 
	
	$name = $_REQUEST[ 'contact-name' ];
	$email = $_REQUEST[ 'contact-email' ];
	$subject = $_REQUEST[ 'contact-subject' ];
	$message = $_REQUEST[ 'contact-message' ];
	$mail_subject = $subject . "( Customer Contact )";
	$message = "Name: ".$name." || Email: ".$email." || Subject: ".$subject." || Message: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'fromtjmail@gmail.com', $mail_subject, $message, "From:" . $email ) ) {
		echo "Gracias por contactarte con nosotros <strong>$name</strong> !";
	} else {
		echo "Ha ocurrido un error, por favor intenta de nuevo.";
	}
	
 ?>