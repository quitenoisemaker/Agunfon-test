<?php
declare (strict_types=1);

include ('include/class_autoload.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Mentee Sign-up Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="main">
        <form action="include/insert" method="POST">
            <h2>Mentee Sign-up</h2>
            <input type="text" name="name" placeholder="Full name"><br><br>
            <input type="email" name="email" placeholder="Enter Email"><br><br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <button type="submit" name="submit">Register</button>
        </form>
        <i>Click link to register as a Mentor</i> <a href="sign_up2">Register</a>
    </div>
</body>

</html>