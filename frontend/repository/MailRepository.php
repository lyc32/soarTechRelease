<?php
	class MailRepository
	{
		private $phpMailer;
		private $companyName;
		
		function __construct($phpMailer, $mailConfig, $companyName)
		{
			$this->phpMailer   = $phpMailer;
			
			$this->phpMailer->SMTPDebug  = 0;
			$this->phpMailer->IsSMTP();
			$this->phpMailer->Host       = $mailConfig->smtpServer;
			$this->phpMailer->SMTPAuth   = true;
			$this->phpMailer->Username   = $mailConfig->smtpEmail;
			$this->phpMailer->Password   = $mailConfig->smtpPassword;
			$this->phpMailer->SMTPSecure = 'ssl'; // or tls
			$this->phpMailer->Port       = $mailConfig->smtpPort;
			$this->phpMailer->Password   = $mailConfig->smtpPassword;
			$this->companyName = $companyName;
			$this->phpMailer->setFrom($mailConfig->smtpEmail, $this->companyName);
			$this->phpMailer->addAddress($mailConfig->adminEmail); 
			$this->phpMailer->isHTML(true);
			$this->phpMailer->CharSet = "UTF-8";
		}
		
		function sendMail($firstName, $lastName, $email, $message)
		{
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');
			
			$subject = '['.date('Y-m-d H:i:s').']['.$this->companyName."]";
			$body = "Email ID: <br>".$email."<br>Message:<br>".$message;
			
			if($firstName != null || $lastName != null)
			{
				$subject = $subject."You got a message from ".$firstName." ".$lastName;
			}
			else 
			{
				$subject = $subject."You got a message";
			}
			
			$this->phpMailer->Subject = $subject; 
			$this->phpMailer->Body    = $body; 
			
			
			$this->phpMailer->AltBody = '['.$email.']'.$message; 
			if(!$this->phpMailer->send())
			{
				echo('STMP ERROR');
			} 
			else 
			{
				echo('success');
			}
		}
	}
?>