<html>
<head>
    <title><?php echo $page_title;?></title>
    <meta charset="UTF-8" />
</head>
<body>
<h1>ICS 325 Metro State University</h1>

<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:59 PM
 */?>
<?php require 'includes/login_functions.inc';?>
<?php # Script 11.8 - login.php #3
if (isset($_POST['submitted'])) {
    list ($check, $data) = check_login($_POST['email'], $_POST['pass']);

    if ($check) { // OK!
        session_start();
        $_SESSION['user_id'] = $_POST['email'];
        $url = absolute_url ('loggedin.php');
        header("Location: $url");
        exit();
    } else { // Unsuccessful!
        $errors = $data;
    }
} // End of the main submit conditional.
?>

<?php
// Print any error messages, if they exist:
if (!empty($errors)) {
    echo '<h3>Error!</h3>';
    echo '<p class="error">The following error(s) occurred:<br />';
    foreach ($errors as $msg) {
        echo " - $msg<br />\n";
    }
    echo '</p><p>Please try again.</p>';
}
?>
<h1>Login</h1>
<form action="login.php" method="post">
    <p>
        Email Address:
        <input type="text" name="email" size="20" maxlength="80" />
    </p>
    <p>
        Password:
        <input type="password" name="pass" size="20" maxlength="20"/>
    </p>
    <p>
        <input type="submit" name="submit" value="Login" />
    </p>
    <p>
        <input type="hidden" name="submitted" value="TRUE" />
    </p>
</form>
</body>
</html>

