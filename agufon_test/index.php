<?php
declare (strict_types=1);

include ('include/class_autoload.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Mentee Sign-in Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="main">
        <form action="include/login" method="POST">
            <h2>Mentee Login</h2>
            <input type="email" name="email" placeholder="Enter Email"><br><br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <button type="submit" name="submit">Login</button>

        </form>
        <i>Click link to register as a Mentee</i> <a href="sign_up">Register</a>
    </div>
</body>

</html>