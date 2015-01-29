<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/29/2015
 * Time: 2:14 PM
 */?>
<html>
<head><title>Database Authentication</title></head>
<body>
<form action="<? $_SERVER['PHP_SELF'] ?>"  name="myForm" method="post">
    User Name: <input type="text" name="user" /><br />
    Password: <input type="password" name="passwd" /><br />
    <input type="submit" name="submit" value="Enter" />
</form>

<?php
if (isset($_POST['submit'])){
    $user = trim ($_POST['user']);
    $passwd = trim ($_POST['passwd']);
    $dbcn = new mysqli("localhost","root","root","ics325labs");
    if(mysqli_connect_errno()) {
        echo "<p>Error creating database connection: </p>";
        exit;
    }
    $sql = "SELECT username, pass FROM myPass ";
    $sql = $sql . "WHERE username='$user' AND pass=sha1('$passwd');";
    $result = $dbcn->query( $sql );
    if(!$result){
        echo( "<p>Unable to query database at this time.</p>" );
        exit();
    }
    $numRows = $result->num_rows;
    if($numRows > 0)  {
        $row = $result->fetch_assoc();
        echo "<h2>Welcome " . $row["username"] . "</h2>";
    } else {
        echo "<h2>User name or password is incorrect</h2>";
        echo "<h3>Please Try Again</h3>";
    }
}
?>
</body>
</html>
