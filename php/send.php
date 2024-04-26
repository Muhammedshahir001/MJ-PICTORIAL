<?php
if(!$_POST) exit;

    $to 	  = 'someemail@somedomain.com'; #Replace your email id...
	$name	  = $_POST['txtname'];
	$email    = $_POST['txtemail'];
	$subject  = 'Support';
    $comment  = $_POST['txtmessage'];
        
	if(get_magic_quotes_gpc()) { $comment = stripslashes($comment); }

	 $e_subject = 'You\'ve been contacted by ' . $name . '.';

	 $msg  = "You have been contacted by $name with regards to $subject.\r\n\n";
	 $msg .= "$comment\r\n\n";
	 $msg .= "You can contact $name via email, $email.\r\n\n";
	 $msg .= "-------------------------------------------------------------------------------------------\r\n";
								
	 if(@mail($to, $e_subject, $msg, "From: $email\r\nReturn-Path: $email\r\n"))
	 {
		 echo '<div class="dt-sc-success-box aligncenter"> <span></span> <h4> Success </h4> Thanks for <b>Contacting Us</b>, We will call back to you soon.</div>';
		 
	 }
	 else
	 {
		 echo '<div class="dt-sc-error-box aligncenter"> <span></span> <h4> Error </h4> Sorry your message <b>not sent</b>, Try again Later. </div>';
	 }
?>