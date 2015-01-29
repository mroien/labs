<html>
<head><title> News Item Input </title></head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/29/2015
 * Time: 2:22 PM
 */
if ( isset($_POST['submit']) )   {
    $title = addslashes (trim ($_POST['title']));
    $auth = addslashes (trim ($_POST['auth']));
    $em = addslashes ( trim ($_POST['em']));
    $website = addslashes (trim ($_POST['website']));
    $body = addslashes (trim ($_POST['body']));

    $dbConNum = new mysqli("localhost","root","root","ics325labs");
    if (mysqli_connect_errno())   {
        echo("<p>Error creating Database Connection</p>");
        exit;
    }
    $date = date("Y-m-d");
    $sql="INSERT INTO mynews VALUES
    (NULL, '$title', '$date', '$auth', '$em', '$website', '$body')";
    $result = $dbConNum->query ( $sql );
    if ( $result )  {
        echo("<h3>" . $dbConNum->affected_rows
            . " news items inserted</h3>");
    } else {
        echo("<p>Error inserting Data</p>");
    }
    $dbConNum->close();
}
?>
<p><h2> You can enter news items for ICS 325 Class through the following form:</h2>
<form action="<? $PHP_SELF ?>" method="post">
    <table>
        <tr>
            <td>Your Name </td>
            <td><input type=text size = 50 name="auth"></td>
        <tr>
        <tr>
            <td>Your Email </td>
            <td><input type=text size = 50 name="em"></td>
        </tr>
        <tr>
            <td>News Title </td>
            <td><input type=text size = 50 name="title"></td>
        </tr>
        <tr>
            <td>Web Site </td>
            <td><input type=text size = 50 name="website"></td>
        </tr>
    </table>
    <h3> News </h3>
    <textarea cols = 60 rows = 6 name="body" wrap="virtual"></textarea>
    <br /><input type="submit" name="submit" value="Submit News" />
</form>
</body>
</html>
