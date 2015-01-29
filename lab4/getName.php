<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:35 PM
 * Description:
 * This script asks for a user’s name, then
 * after they press the Submit button their
 * name is displayed at the top of the screen.
 * Variables:
 * $name   The value passed from the user
 * name entry from the form
 */
?>
<html>
<head>
    <title>A form processing site</title>
</head>
<body>
<form name="getName" method="post" action="showName.php">
    Enter your Name:
    <input type="text" name="name" value="Enter Name Here"><br />
    <input type="submit" name="submit" value="Submit"><br />
</form>
</body>
</html>
