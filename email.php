<?php

	$recipients = array('info@ssqtchmedia.com');
	$subject = 'From ssqtchmedia.com';

	$message = $_POST['message'] . "\r\n" . $_POST['fullname'] . "\r\n" . $_POST['email'] . "\r\n" . $_POST['subject'];

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
	$headers .= 'From: <admin@weareentropy.com>' . "\r\n";

	for ($i = 0; $i < count($recipients); $i++) { 
		mail($recipients[$i], $subject, $message, $headers);
	}
	header("index.php");

?>