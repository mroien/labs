<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 3/31/2015
 * Time: 1:26 AM
 */
$qstr = $_SERVER['QUERY_STRING'];
parse_str($qstr);
if (isset($id)) {
    echo "<img src=image.php?id=$id />";
} else {
    $dbcn = mysqli_connect("localhost", "root", "root");
    @mysqli_select_db($dbcn, "ics325labs");
    $sql = "SELECT id, filename FROM binary_data";
    $rs = @mysqli_query($dbcn, $sql);
    while ($row = mysqli_fetch_array($rs)) {
        echo "<a href=getImage.php?id=" . $row["id"] .
            " border=0><img src=image.php?id=" .
            $row["id"] . " width=100 height=80 /></a><p />";
    }
    mysqli_close($dbcn);
}

