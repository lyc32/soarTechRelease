<?php
	if(!empty($_POST) && $_POST['opt'] == 'login')
	{
		require "../repository/UserRepository.php";
		
		$userRepository = new UserRepository();
		$userRepository->login($_POST['username'], $_POST['password']);
	}
	else if(!empty($_POST) && $_POST['opt'] == 'logout')
	{
		session_start();
		session_unset();
		session_destroy();
		echo("success");
	}
	else 
	{
		echo("404 not found");
	}
?>	

