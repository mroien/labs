<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:50 PM
 */
session_start();

if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

    if (($uname == "METRO") && ($pword == "STATE")){
        $_SESSION['loggedIn'] = "IN";
        echo "Welcome to my site your Session has been set<br />";
        echo "You can now click on the link below<br />";
    }
}
?>
<html>
<head>
    <title>Sessions</title>
</head>
<body>
<form action="<? $_SERVER['PHP_SELF'] ?>"
      method="post" name="myForm">
    User Name: <input type="text" name="uname" /><br />
    Password:  <input type="password" name="pword" /><br />
    <input type="submit" value="Submit" name="submit" />
</form>
<a href="locked.php">Click Here</a>
</body>
</html>

locked.php
<html>
<body>
<?php
session_start();
if ($_SESSION['loggedIn'] == "IN"){
    echo "Your Session ID = " . session_id();
}  else{
    header("location:http://localhost/labs/lab10");
}
?>
<p>
    <a href="http://localhost/labs/lab10/killSession.php">Log out</a>
</p>
</body>
</html>
