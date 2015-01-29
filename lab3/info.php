<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:31 PM
 *  This file calls a function which displays all of the
 * configuration settings for the current installation
 * of PHP.  Run it on our server and print the results,
 * then compare with your home configuration.
 */
phpinfo();
?>


loop.php
<?php
define ("TBLSIZE", 5);  // define a constant
?>
<html>
<head>
    <meta charset=”UTF-8”/>
    <title>A Simple Multiplication Table</title>
    <style type="text/css">
        table {border-collapse:collapse;table-layout:fixed;width:50% }
        td { border: thin solid; border-color: red; text-align: right }
    </style>
</head>

<body>
<table>
    <?php
    for ($i=1; $i <=TBLSIZE; $i++)   {
        echo "<tr>";
        for ($j=1; $j <= TBLSIZE; $j++)  {
            $product = $i * $j;
            echo "<td>$product</td>\n";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
