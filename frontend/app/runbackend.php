<?php
	$cmd = "lsof -i:9527";
	$result = system($cmd)
	
	echo $result;
	/*
	
	if($result == null || $result == '')
	{
		system();
	}
	else 
	{
		echo $result;
	}*/
?>