<?php
include ('include/class_autoload.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mentor Sign-up Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="main2">
	<form action="include/insert2" method="POST">
		<h2>Mentor Sign-up</h2>
		<input type="text" name="name" placeholder="Full name"><br><br>
		<input type="email" name="email" placeholder="Enter Email"><br><br>
		<input type="password" name="password" placeholder="Enter Password"><br><br>
		<select name="mentee">
			<option value="" selected disabled>Select mentee</option>
			<?php $test= new Mentee();
				$test->getMentee(); ?>
		</select><br><br>
		
		<button type="submit" name="submit">Register</button>
	</form>
	</div>

</body>
</html>