<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 3/31/2015
 * Time: 1:25 AM
 */
$qstr = $_SERVER['QUERY_STRING'];
parse_str($qstr);
if (isset($id)) {
    $dbcn = mysqli_connect("localhost", "root", "root");
    @mysqli_select_db($dbcn, "ics325labs");
    $sql = "SELECT bin_data, filetype FROM binary_data WHERE id= $id";
    $rs = @mysqli_query($dbcn, $sql);

    $row = mysqli_fetch_array($rs);
    $data = $row["bin_data"];
    $type = $row["filetype"];
    mysqli_close($dbcn);

    Header("Content-type: $type");
    echo $data;
}
