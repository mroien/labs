<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 9:01 PM
 */
session_start(); // Start the session.
if (!isset($_SESSION['user_id'])) {
    require_once('includes/login_functions.inc');
    $url = absolute_url('login.php');
    header("Location: $url");
    exit();
}

echo "<h1>Logged In!</h1>
 <p>You are now logged in, {$_SESSION['user_id']}!</p>
 <p><a href=\"logout.php\">Logout</a></p>";
?>
