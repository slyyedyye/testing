<?php
	$file = $_GET['item'];
	if(isset($file))
	{
		include($file);
	}
	else
	{
		header("location: http://localhost/vuln_page.php");
		exit();
	}

?>
