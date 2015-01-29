<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:50 PM
 */
$myPics = array("left.gif","right.gif","up.gif","down.gif");
shuffle($myPics);
?>
<html>
<body>
<h3>Click on refresh.  Watch the arrows.</h3>
<?php
for($i=0;$i<4;$i++){
    ?>
    <img src="../images/<?=$myPics[$i] ?>" />
<?php
}
?>
</body>
</html>
