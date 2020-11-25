<?php
include ('include/class_autoload.php');


?>
<!DOCTYPE html>
<html>

<head>
    <title>Mentee Dasboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard_style2.css">
</head>

<body>
    <div class="main">
    	<h2 style="background: steelblue; padding: 5px; text-align: center; color: white">Mentee</h2>
        <h1>Welcome
            <?php $test= new Testdb();
			$test->getUsers(); ?>
        </h1>
        <p>Your mentors are:</p>
        <?php $test2= new Testdb();
		$test2->getMentor(); ?>
    </div>
    <br>
    <div><a href="logout">Logout</a></div>
</body>

</html>