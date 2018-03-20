<?php

$config['csrf_protection'] = FALSE;
header('Access-Control-Allow-Origin: *');

/**
 *	Google's Gmail servers.
 */

//header("HTTP/1.1 ".$this->_code." ".$this->get_status_message());
//header("Content-Type:".$this->_content_type); 

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "email@gmail.com";

//Password to use for SMTP authentication
$mail->Password="password";

//Set who the message is to be sent to
if(isset($_REQUEST['email']))
{
$emailarray = explode(',', $_REQUEST['email']);
foreach($emailarray as $email)$mail->addAddress($email, 'Email');
//Set who the message is to be sent from
$mail->setFrom("user@gmail.com", 'Email');
//Set an alternative reply-to address
$mail->addReplyTo("user@gmail.com",'Email');
}
else {$mail->addAddress('divyavrat@gmail.com', 'Divyavrat Jugtawat');
//Set who the message is to be sent from
$mail->setFrom('from@divyavrat.com', 'Divyavrat Jugtawat');
//Set an alternative reply-to address
$mail->addReplyTo('divyavrat@gmail.com', 'Divyavrat Jugtawat');
}

//Set the subject line
$mail->Subject = 'Hello Mailing';
if(isset($_REQUEST['subject']))
	$mail->Subject = $_REQUEST['subject'];

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
if(isset($_REQUEST['html']))$mail->msgHTML(file_get_contents($_REQUEST['html']), dirname(__FILE__));
else if(isset($_REQUEST['htmlcode']))$mail->msgHTML($_REQUEST['htmlcode'], dirname(__FILE__));
else {$mail->Body = $_REQUEST['msg'];}

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
if(isset($_REQUEST['attach']))
	$mail->addAttachment($_REQUEST['attach']);

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
	return 0;
} else {
    echo "Message sent!";
	return 1;
}
