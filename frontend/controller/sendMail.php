<?php
	
	use PHPMailer\PHPMailer\PHPMailer; 
	use PHPMailer\PHPMailer\Exception; 
	
	require '../tools/PHPMailer.php';
	require '../tools/Exception.php';
	require '../tools/SMTP.php'; 
	
	
	require '../config/AdminMailConfig.php';
	require '../repository/MailRepository.php';
	
	if(empty($_POST))
	{
		echo("403 Forbidden");
	}
	else if( $_POST['email'] != null && $_POST['message'] != null)
	{
		
		$sendMail = new MailRepository(new PHPMailer(true), new AdminMailConfig(), "companyName"); 
		try
		{
			echo($sendMail->sendMail($_POST['firstName'], $_POST['lastName'], $_POST['email'],$_POST['message']));
		}
		catch(Exception $e)
		{
			echo("500 Internal Server Error");
		}
		
	}
	else
	{
		echo("400 Bad Request");
	}
	
	
	
	
?>	

