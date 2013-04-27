<?php
	if(!empty($_GET['name'])){
		if(!empty($_GET['email'])){
			if(!empty($_GET['message'])){
				$name = trim(stripslashes($_GET['name']));
				$email = trim(stripslashes($_GET['email']));
				$telephone = trim(stripslashes($_GET['telephone']));
				$message = trim(stripslashes($_GET['message']));
				$userIP = $_SERVER['REMOTE_ADDR'];
				$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Telephone: ' . $telephone . "\n\n" . 'Message: ' . $message . "\n\n" . 'User IP: ' . $userIP;
				$email_to = "mail@trippnology.com";
				$subject = "Contact from your website";
				$headers .= "MIME-Version: 1.0\n";
				$headers .= "From: $email \n";
				$headers .= "Reply-To: $email \n";
				$mail = mail($email_to, $subject, $body, $headers);
				if($mail == 0){
					$error = array("content" => "It's not your fault, but something went wrong when sending your message.");
				} else {
					$error = array("content" => "Your message has been sent. We'll be in touch soon.");
				}
			} else {
				$error = array("content" => "You forgot to add a message.");
			}
		} else {
			$error = array("content" => "We need an email address in order to contact you.");
		}
	} else {
		$error = array("content" => "Nice to meet you! What's your name?");
	}
	echo json_encode($error);
?>
