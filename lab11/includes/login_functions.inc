<?php

function absolute_url ($page = 'index.php') {
    $url = 'http://' . $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
    $url = rtrim($url, '/\\');
    $url .= '/' . $page;
    return $url;
}

function check_login($email = '', $pass = '') {
    $errors = array(); // Initialize error array.
    if (empty($email)) {
        $errors[] = 'You must specify an email address.';
    }
    // Validate the password:
    if (empty($pass)) {
        $errors[] = 'You forgot to enter your password.';
    }
    if (empty($errors)) {
        if ($email == 'admin@mystore.com' && $pass == 'strongpassword') {
            return array(true, $errors);
        } else { // Not a match!
            $errors[] = 'The email address and password entered do not match those on file.';
        }
    } // End of empty($errors) IF.
    // Return false and the errors:
    return array(false, $errors);
} // End of check_login() function.
?>
