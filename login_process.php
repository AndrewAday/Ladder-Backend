<?php
require_once('db_connect.php');
// DB: ladder
// Collection: $players

$email = $_POST['email'];
$password = $_POST['password'];

$query = array("email" => $email);
$result = $players->findOne($query);
if ($result) {
	//TODO: update with proper location
	if (password_verify($password, $result['password'])) {
		$_SESSION['ladder']['email'] = $email;	
		header("Location: ./");
		exit; 
	} else {
		// incorrect password
		header("Location: login.php?error=pass");
		exit;
	}
	
} else {
	// User does not exist,
	header("Location: login.php?error=user");
}




?>