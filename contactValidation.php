<?php

	$name = $_POST['fname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$msg = $_POST['message'];

	if(!empty($name) || !empty($phone) || !empty($email) || !empty($msg)){


			// email to the user
			$to = $email;
			$subject = 'Enquiry Form – Domestic For You';
			$headers = "From: support@domesticforyou.com\r\n" ;
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			$message = "<html></body>";
			$message .= "<head><style>";
			$message .= "p{font-family:verdana;font-size:14px;line-height:1.2;}";
			$message .= "</style></head>";
			$message .= "<p>Greeting From Domestic For You,</p>";
			$message .= "<p>Thanks for contacting us and filling the enquiry form. We would like to inform you that we have received the enquiry form as below:</p><br/>";
			$message .= "<p><b>Full Name : </b>{$name}</p>";
			$message .= "<p><b>Email : </b>{$email}</p>";
			$message .= "<p><b>Phone : </b>{$phone}</p>";
			$message .= "<p><b>Message : </b>{$msg}</p><br/>";
			$message .= "<p>Thank You, Our Customer care team we will get back to you within 24 hours.</p>";
			$message .= "<p>You can reach to us on info@domesticforyou.com or may contact us on +91-8800590666.</p><br/>";
			$message .= "<p>Regards</p>";
			$message .= "<p>Domestic For You Pvt Ltd</p>";
			$message .= "</body></html>";
			mail($to, $subject, $message, $headers);


			// email to the company
			$to1 = 'info@domesticforyou.com';
			$subject1 = 'Enquiry Form - '.$name;
			$headers1 = "From: support@domesticforyou.com\r\n" ;
			$headers1 .= "MIME-Version: 1.0\r\n";
			$headers1 .= "Content-Type: text/html; charset=UTF-8\r\n";
			$message1 = "<html></body>";
			$message1 .= "<head><style>";
			$message1 .= "p{font-family:verdana;font-size:14px;line-height:1.2;}";
			$message1 .= "</style></head>";
			$message1 .= "<p>Greeting</p>";
			$message1 .= "<p>We would like to inform you that we have received a new enquiry form as below:</p><br/>";
			$message1 .= "<p><b>Full Name : </b>{$name}</p>";
			$message1 .= "<p><b>Email : </b>{$email}</p>";
			$message1 .= "<p><b>Phone : </b>{$phone}</p>";
			$message1 .= "<p><b>Message : </b>{$msg}</p><br/>";
			$message1 .= "<p>Thank You, Please contact within 24 hours.</p>";
			$message1 .= "<p>Regards</p>";
			$message1 .= "<p>Domestic For You Pvt Ltd</p>";
			$message1 .= "</body></html>";
			mail($to1, $subject1, $message1, $headers1);

			echo 'Thank you for contacting us.';


	}else{
		echo 'Something went wrong, please try again.';
	}

?>