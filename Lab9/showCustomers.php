<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:38 PM
 */
?>
<html>
<head>
    <title>Customer Information</title>
</head>
<body>
<h1>Customer Information Page</h1>
<?php
@ $filePointer = fopen("files/customers.txt", "r");
if (!$filePointer){
    print "The customer file is empty or missing";
    exit;
}
if(isset($_POST['submit'])){
    $submit = htmlspecialchars(strip_tags($_POST['submit']));
    $customer = htmlspecialchars(strip_tags($_POST['customer']));

    $customerInfo = fgetcsv($filePointer, 100, ",");   // priming read
    while(!feof($filePointer)){
        if($customer == $customerInfo[0])   {
            print "<table>";
            print "<tr><th align=right>Customer Number: </th>".
                "<td>$customerInfo[0]</td></tr>";
            print "<tr><th align=right>Customer Name: </th>".
                "<td>$customerInfo[1] $customerInfo[2] </td>";
            print "<tr><th align=right>Address: </th>".
                "<td> $customerInfo[3] </td>";
            print "<tr><td></td>".
                "<td>$customerInfo[4], $customerInfo[5]
			$customerInfo[6] </td>";
            print "</table>";
        }

        $customerInfo = fgetcsv($filePointer, 100, ",");
    }
}
?>
<form name="customerForm" action="<? $_SERVER['PHP_SELF'] ?>" method="post">
    Please Select A Customer:
    <select size="1" name="customer" id="customer">
        <?php
        rewind($filePointer);
        $customerInfo = fgetcsv($filePointer, 100, ",");
        while(!feof($filePointer)) {
            ?>
            <option value="<?=$customerInfo[0]?>"><?=$customerInfo[1]?>
                <?=$customerInfo[2]?></option>
            <?php
            $customerInfo = fgetcsv($filePointer, 100, ",");
        }
        ?>
    </select>
    <input type="submit" value="Get Customer Information" name="submit" />
</form>
<?php
fclose($filePointer);
?>
</body>
</html>
