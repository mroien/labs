<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 3/31/2015
 * Time: 1:19 AM
 */
function myUpload()
{
    print "The myUpload function has been called!<br>";
    print "The temporary file name is " . $_FILES['aFile']['tmp_name'];
    if (is_uploaded_file($_FILES['aFile']['tmp_name'])) {
        $fileName = $_FILES['aFile']['tmp_name'];
        print "<br>The file $fileName was uploaded successfuly";
        $realName = $_FILES['aFile']['name'];
        print "<br>The real file name is $realName";
        print "<br>Copying file [$realName] to the uploads-directory";
        move_uploaded_file($_FILES['aFile']['tmp_name'],
            "C:/MAMP/uploads/" . $realName);
    } else {
        print"<br>Possible file upload attack:" .
            $_FILES['aFile']['name'] . ".";
    }
}

?>
<html>
<body>
<?php
// Check to see if the upload button has been pressed
if (isset($_REQUEST['task'])) {
    if ($_REQUEST['task'] == "uploadfile") {
        myUpload();     // call the function myUpload()
    }
}
?>
<form enctype="multipart/form-data" method="POST"
      action="loadfile.php?task=uploadfile">
    File Name:
    <input type="file" name="aFile" size="35"><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"><br>
    <input type="submit" value="Upload" name="B1">
    Please wait for confirmation
</form>
<a href="loadfile.php">Clean screen!</a>
</body>
</html>
