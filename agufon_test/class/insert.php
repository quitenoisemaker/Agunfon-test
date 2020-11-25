<?php

	$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

	$test= new Testdb();
	$test->setUsersStmt($name, $email, $password);
?>