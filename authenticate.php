<?php 

session_start();

if (!preg_match("{(?:login|logout|signup)\.php$}", $_SERVER["PHP_SELF"]))
{
	if (empty($_SESSION["ladder"]))
	{
		header("Location: login.php");
	}
}

?>