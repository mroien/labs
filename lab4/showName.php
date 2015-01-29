<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:37 PM
 */
if (isset($_POST["submit"]))  {
    $name = $_POST['name'];     // create shortcut name for variable
    $name = strip_tags($name);  // eliminates tage typed by user
    $name = htmlspecialchars($name); // do not embed special chars

    echo "<h1>Hello ".$_POST['name']."</h1>";
}
?>