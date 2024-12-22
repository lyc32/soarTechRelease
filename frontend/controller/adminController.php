<?php
	if(empty($_GET))
	{
		return "<div class='title text-white'>ERROR</html>";
	}
	else if($_GET['path'] == 'user')
	{
		require '../view/product.php';
	}
	else if($_GET['path'] == 'category')
	{
		require '../view/about.php';
	}
	else if($_GET['path'] == 'product')
	{
		require '../view/contact.php';
	}
	else 
	{
		return "<div class='title text-white'>ERROR</html>";
	}
?>	

