<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 9:01 PM
 */
// This page lets the user logout.
session_start(); // Access the existing session.
// If no session variable exists, redirect the user:
if (!isset($_SESSION['user_id'])) {
    require_once ('includes/login_functions.inc');
    $url = absolute_url('login.php');
    header("Location: $url");
    exit();
} else { // Cancel the session.
    $_SESSION = array(); // Clear the variables.
    session_destroy(); // Destroy the session itself.
    setcookie ('PHPSESSID', '', time()-3600,'/', '', 0, 0); // Destroy the cookie.
}
// Set the page title and include the HTML header:
echo "<h1>Logged Out!</h1>
 <p>You are now logged out!</p>";
?>
