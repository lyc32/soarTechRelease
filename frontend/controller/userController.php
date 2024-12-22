<?php
	require '../config/TextConfig.php';

	if(empty($_GET))
	{
		return "<div class='title text-white'>404 Not Found</html>";
	}
	else if( $_GET['path'] == 'home')
	{
		require '../view/body/userView/home.php';
	}
	else if($_GET['path'] == 'product')
	{
		require '../view/body/userView/product.php';
	}
	else if($_GET['path'] == 'about')
	{
		require '../view/body/userView/about.php';
	}
	else if($_GET['path'] == 'contact')
	{
		require '../view/body/userView/contact.php';
	}
	else if($_GET['path'] == 'chat')
	{
		require '../view/body/userView/chat.php';
	}
	else if($_GET['path'] == 'login')
	{
		require '../view/body/userView/login.php';
	}
	else if( $_GET['path'] == 'dashboard')
	{
		require '../view/body/adminView/dashboard.php';
	}
	else 
	{
		return "<div class='title text-white'>404 Not Found</html>";
	}
?>	

