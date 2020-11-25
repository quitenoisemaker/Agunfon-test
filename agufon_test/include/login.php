<?php

//Form action for login
@session_start();



include ('class_autoload.php');

$email=$_POST['email'];
$password=md5($_POST['password']);

$_SESSION['user_email']=$email;
	$test= new Testdb();
	$test->logMentee( $email, $password);
?>