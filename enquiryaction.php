<?php

session_start();
include('libraries/config.php');

$key = 'asdasdasdasdasda1asds';

$_SESSION[sys_prefix.'_ack_msg'] = false;
if($_POST)
{
	if(isset($_SESSION[sys_prefix.'_contact']) && $_SESSION[sys_prefix.'_contact'] == $key)
	{
		$name = trim($_POST['name']);
		$contactno = trim($_POST['contactno']);
		$email = trim($_POST['email']);
		$query = trim($_POST['query']);
		
		$mail_subject = "Website Enquiry From ".$name;
		$to = "response@phool.com";
		//$to = "your@gmail.com";
		$mail_msg = "Name: ".$name."\r\n\r\nEmail Id.: ".$email."\r\n\r\nPhone No.: ".$contactno."\r\n\r\nMessage: ".$query."\r\n\r\n\r\nPlease Note: This is a system generated email";
		
		$headers = "";
		
		// Plain Text Email
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
		
		$headers .= 'From: Website Enquiry <noreply@phool.in>' . "\r\n";
		$headers .= 'Reply-To: <'.$email.'>' . "\r\n";
		
		//mail($to, $mail_subject, $mail_msg, $headers, '-fnoreply@phool.in');
		$_SESSION[sys_prefix.'_ack_msg'] = true;
	}
}

header("location: contact-us");
die;

?>