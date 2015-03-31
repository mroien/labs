<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 3/31/2015
 * Time: 1:23 AM
 */
?>

<html>
<head><title>Store binary data into SQL Database</title></head>
<body>
<?php
if (isset($_POST['submit'])) {
    $filename = $_FILES['filestuff']['name'];
    $tempname = $_FILES['filestuff']['tmp_name'];
    $filesize = $_FILES['filestuff']['size'];
    $filetype = $_FILES['filestuff']['type'];

    $file_description = $_POST['file_description'];

    $dbcn = mysqli_connect("localhost", "root", "root");
    $selected = mysqli_select_db($dbcn, "ics325labs");

    $fp = fopen($tempname, "r");
    if (!$fp) {
        echo "error in fopen";
        exit;
    }

    $data = addslashes(fread($fp, filesize($tempname)));
    $sql = "INSERT INTO binary_data VALUES (NULL,'$file_description'," .
        "'$data','$filename','$filesize','$filetype')";
    echo $query;
    $result = mysqli_query($dbcn, $sql);

    $id = mysqli_insert_id($dbcn);
    print "<p>This file has the following Database ID: <b>$id</b>";

    mysqli_close($dbcn);
} else {
    ?>

    <form method="post" action="<? $_SERVER['PHP_SELF'] ?>"
          enctype="multipart/form-data">
        File Description:<br>
        <input type="text" name="file_description" size="40">
        <input type="hidden" name="MAX_FILE_SIZE" value="4000000">
        <br>File to upload/store in database:<br>
        <input type="file" name="filestuff" size="40">

        <p><input type="submit" name="submit" value="submit">
    </form>
<?php
}
?>
</body>
</html>
