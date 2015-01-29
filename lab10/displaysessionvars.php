<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:44 PM
 */
session_start();
echo "<br />*** Variables are not defined ***<br />";
echo "Color is $color<br />";
echo "Age is $age<br />";

echo "<br />*** SESSION VARIABLES ***<br />";
echo "Color is ".$_SESSION['color']."<br />";
echo "Age is ".$_SESSION['age']."<br />";

