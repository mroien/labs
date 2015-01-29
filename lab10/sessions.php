<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:44 PM
 */
session_start();
$_SESSION['color'] = 'red';
$_SESSION['age'] = 22;
echo "Color is ".$_SESSION['color']."<br />";
echo "Age is ".$_SESSION['age']."<br />";
?>
<a href="displaysessionvars.php">Display Session Variables</a>
