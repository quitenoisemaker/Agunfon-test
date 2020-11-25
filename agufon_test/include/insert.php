<?php

//Form action for mentee
session_start();

include ('class_autoload.php');

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);

$_SESSION['user_email']=$email;
	$test= new Testdb();
	$test->setUsersStmt($name, $email, $password);
?>