<html>
<title>Login</title>
<body>
<?php
	$usr = "appsec";
	$pwd = "LFIchallenge";
	$username = '$_POST[username]';
	$password = '$_POST[password]';
	$valid = $_POST["valid_user"];
	session_start();
	if ($_POST['username']=="appsec" && $_POST['password']=="LFIchallenge") {
		echo "Login Successful!";
		$_SESSION['login']=true;
		$_SESSION['user']=$valid;
		header('location: /item_page.php');
		exit();
	}
	else {
		echo "Login is incorrect. Check login page source code.";
	}
?>

<form name="input" action="login.php" method="get">
	<input type="submit" value="Home">
</form>

</body>
</html>
