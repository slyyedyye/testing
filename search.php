<?php
	$file = $_GET['item'];
	if(isset($file))
	{
		include($file);
	}
	else
	{
		header("location: /item_page.php");
		exit();
	}

?>
