<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:56 PM
 */
$myParts = array();
$myParts["HD"] = "Seagate";
$myParts["Modem"] = "Motorola";
$myParts["CPU"] = "Intel";
?>
<html>
<body>

<h3>Here is a way to print associative array's values</h3>
<?php
echo $myParts["CPU"].", ".$myParts["Modem"].", ".$myParts["HD"];
?>

<h3>Print associative array's values and keys</h3>
<?php
while($part = each($myParts)){
    echo $part["value"]." is a ".$part["key"]."<br />";
}
?>

<h3>Another way to print associative array's values and keys</h3>
<?php
foreach ($myParts as $index=>$contents){
    echo $contents." is a ".$index."<br />";
}
?>
</body>
</html>
