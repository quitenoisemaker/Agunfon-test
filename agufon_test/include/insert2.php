<?php

//Form action for mentor
include ('class_autoload.php');

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$mentee=$_POST['mentee'];
	$test= new Testdb();
	$test->setMentor($mentee, $name, $email, $password);
?>