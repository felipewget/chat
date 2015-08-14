<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

require 'mailer_2015/PHPMailer-master/PHPMailerAutoload.php';

define('GUSER', 'iseeteste@gmail.com'); // GMail username
define('GPWD', 'isee1q2w3e'); // GMail password

function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = GUSER;  
	$mail->Password = GPWD;  

	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML				
	$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		
		echo $error = 'Mail error: '.$mail->ErrorInfo; 
		// return false;
	} else {
		echo 1;
		$error = 'Message sent!';
		// return true;
	}
}

$msg = utf8_decode('Mensagem do email<br>' . 'Nome:' . $_POST['nome'] . '<br>Email:' . $_POST['email'] . '<br>Telefone:' . $_POST['tel'] . '<br>Celular:' . $_POST['cel'] . '<br>Mensagem:' . $_POST['mensagem']);

smtpmailer('felipe.oliveira@isee.com.br', 'iseeteste@gmail.com', utf8_decode('Contato Barueri Hotel'), utf8_decode('Contato através do site barueriresidence.com.br'), $msg);

}

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
/*
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

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
$mail->Username = "felipeestrona@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "esplinter";

//Set who the message is to be sent from
$mail->setFrom('from@example.com', 'First Last');

//Set an alternative reply-to address
// $mail->addReplyTo('felipe.wget@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('felipe.wget@gmail.com', 'John Doe');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
// $mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

*/

?>