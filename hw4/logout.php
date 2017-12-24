<?php
	session_start();
	session_destroy();
	unset($_SESSION["username"]);
	redirect("login.php");
?>

<?php
	function redirect($file)
	{
		$host=$_SERVER["HTTP_HOST"];
		$path=rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
		header("Location:http://$host$path/$file");
	}
?>