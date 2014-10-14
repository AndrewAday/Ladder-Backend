<?php
require_once('db_connect.php');
// DB: ladder
// Collection: $players

$email = $_POST['email'];
$password = $_POST['password'];

$query = array("email" => $email, "password" => password_hash($password, PASSWORD_DEFAULT));
$players->insert($query);

$_SESSION['ladder']['email'] = $email;
//TODO: change to proper location
header("Location: ./");



?> 