<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:52 PM
 */
session_start();
session_destroy();
echo("Successfully logged out");
?>
<p>
    <a href="http://localhost/labs/lab10">Log in</a>
</p>
</body>
</html>
