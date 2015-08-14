<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

require 'vendor/mail/PHPMailer-master/PHPMailerAutoload.php';

define('GUSER', 'felipe.wget@gmail.com'); // GMail username
define('GPWD', 'Ofelipe147'); // GMail password

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

$msg = utf8_decode('Mensagem do email' . 
					'<br>Nome:' . $_POST['name'] . 
					'<br>Email:' . $_POST['email'] . 
					'<br>Assunto:' . $_POST['subject'] . 
					'<br>Mensagem:' . $_POST['message']);

smtpmailer($enviarPara, $enviarPara, 'Contato Agência', utf8_decode('Site Agência | Contato'), $msg);

}

?>