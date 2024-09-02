<?php 	
	session_start();
	$homePage = "'home'";
	if(isset($_SESSION['role']))
	{
		$homePage = "'dashboard'";
	}
?>

<body class="font">
	<script>
	  AOS.init ();
	  getHtml(<?php echo($homePage);?>);
	</script>
	
	<?php require './view/body/background/background.php';?>
	<?php require './view/body/header/navbar.php';?>
	
	<div id = "mainPage">
	</div>
	
	<?php require './view/body/footer/footer.php';?>
	<?php require './view/body/popWindow/chatButton.php';?>
	<?php require './view/body/popWindow/messageDialog.php';?>
</body>