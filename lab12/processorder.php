<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/29/2015
 * Time: 1:47 PM
 */
require_once('file_exceptions.php');
define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

// Make up order amounts
$tireqty = 4;
$oilqty = 3;
$sparkqty = 0;
?>
<html>
<head><title>Bob's Auto Parts - Order Results</title></head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
$date = date('H:i, jS F');
echo '<p>Order processed at '.$date.'</p>';

echo '<p>Your order is as follows: </p>';
$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo 'Items ordered: '.$totalqty.'<br />';
$totalamount = 0.00;

$totalamount = $tireqty * TIREPRICE
    + $oilqty * OILPRICE
    + $sparkqty * SPARKPRICE;
$totalamount=number_format($totalamount, 2, '.', ' ');
echo '<p>Total of order is '.$totalamount.'</p>';
$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t"
    .$sparkqty." spark plugs\t\$".$totalamount
    ."\t\n";

// open file for appending
try   {
    if (!($fp = @fopen("orders/orders.txt", 'ab')))
        throw new fileOpenException("File failed to open", 21);

    if (!flock($fp, LOCK_EX))
        throw new fileLockException("Could not lock file", 22);

    if (!fwrite($fp, $outputstring, strlen($outputstring)))
        throw new fileWriteException("Could not write to file", 23);
    flock($fp, LOCK_UN);
    fclose($fp);
    echo '<p>Order written.</p>';
}
catch (fileOpenException $foe)   {
    echo '<p><strong>Orders file could not be opened.  '
        .'Please contact our webmaster for help.</strong></p>';
    echo $foe;
}
catch (Exception $e) {
    echo '<p><strong>Your order could not be processed at this time.'
        .'Please try again later.</strong></p>';
}

?>
</body></html>
