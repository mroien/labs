<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:02 PM
 */?>
<html>
<head>
    <title>Regular Expression Evaluation Sandbox</title>
</head>
<body>
<form action="" method="post">
    Pattern: <input type="text" name="pattern" />
    String:  <input type="text" name="inputString" />
    <input type="submit" name="submit" value="Check Pattern" />
</form>
<?php
if (isset($_POST['submit']))  {
    $pattern = $_POST['pattern'];
    $pattern = "/".$pattern."/";
    $inputString = $_POST['inputString'];
    if (preg_match($pattern, $inputString))
        echo "preg_match ($pattern, $inputString): Match";
    else echo "preg_match ($pattern, $inputString): Not a Match";
}
?>
</body>
