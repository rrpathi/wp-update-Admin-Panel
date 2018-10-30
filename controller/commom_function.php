<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/vendor/autoload.php';

function send_mail($to,$activation_key){
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	// $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'ragupathi@revmakx.com';                 // SMTP username
		$mail->Password = '********';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
		$mail->addAddress($to,'user');     // To Address
		$mail->setFrom('ragupathi@revmakx.com', 'Mailer');			 //From Address	
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Welcome to Revmax Technologies Your Activation Code';
		$mail->Body    = 'Thanks Purchase Order Your Activation Code: <b style="color:green;">'.$activation_key.'</b>';
		$mail->send();
		echo 'Message has been sent';
		} catch (Exception $e) {
			echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}
