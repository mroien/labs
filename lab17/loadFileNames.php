<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 3/31/2015
 * Time: 1:35 AM
 */
?>

<html>
<head><title>Store file names into SQL Database</title></head>
<body>
<?php
if (isset($_POST['submit'])) {
    $form_description = $_POST['form_description'];
    if (is_uploaded_file($_FILES['aFile']['tmp_name'])) {
        $realName = $_FILES['aFile']['name'];
        move_uploaded_file($_FILES['aFile']['tmp_name'], "C:/MAMP/htdocs/labs/lab17/uploads/" . $realName);

        if (!$dbcn = mysqli_connect("localhost", "root", "root")) {
            echo "Error connecting to DB<br />";
            exit();
        }
        if (!mysqli_select_db($dbcn, "ics325labs")) {
            echo "Error selecting DB<br />";
            exit();
        }

        $sql = "INSERT INTO names VALUES (NULL, '$form_description','$realName')";
        $result = mysqli_query($dbcn, $sql);
        if (!$result) {
            echo "Error in query<br />";
            exit();
        }
        mysqli_close($dbcn);
    } else {
        echo "Error uploading";
        exit();
    }
}
?>

<form method="post" action="<? $_SERVER['PHP_SELF'] ?>"
      enctype="multipart/form-data">
    File Description:<br/>
    <input type="text" name="form_description" size="40">
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
    <br/>File to upload/store in database:<br/>
    <input type="file" name="aFile" size="40">

    <p>
        <input type="submit" name="submit" value="submit">
        <br/><a href="showImage.php">Show Images</a>
</form>

</body>
</html>

