<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:41 PM
 */
define("LABOR",50);
?>

<html>
<head>
    <title>My Computer Workshop.com</title>
    <style type="text/css">
        table { border-collapse: collapse; width: 90%; }
        td { border: none }
        table.order { border-collapse: collapse; width: 80% }
        td.left  { text-align: left; width: 50% }
        td.right { text-align: right; width: 50% }
        th.left  { text-align: left; width: 50% }
        th.right { text-align: right; width: 50% }
        th.thwork { text-align: left; width: 40% }
        th.thhours {text-align: right;  width: 20% }
        th.thrate { text-align: right; width: 20% }
        th.thcost { text-align: right; width: 20% }
        td.lineitemwork { text-align: left; width: 40% }
        td.lineitemhours { text-align: right; width: 20% }
        td.lineitemrate { text-align: right; width: 20% }
        td.lineitemcost { text-align: right; width: 20% }
        th.installleft { text-align: left }
    </style>
</head>
<body>
<h1>Welcome to My Computer Workshop</h1>
<?php
if(isset($_POST["submit"])){
$fName = htmlspecialchars(strip_tags($_POST["fName"]));
$lName = htmlspecialchars(strip_tags($_POST["lName"]));
$address = htmlspecialchars(strip_tags($_POST["address"]));
$city = htmlspecialchars(strip_tags($_POST["city"]));
$state = htmlspecialchars(strip_tags($_POST["state"]));
$zip = htmlspecialchars(strip_tags($_POST["zip"]));
$phone = htmlspecialchars(strip_tags($_POST["phone"]));
$modemType = htmlspecialchars(strip_tags($_POST["modemType"]));
$modemHours= htmlspecialchars(strip_tags($_POST["modemHours"]));
$memoryAmount= htmlspecialchars(strip_tags($_POST["memoryAmount"]));
$memHours= htmlspecialchars(strip_tags($_POST["memHours"]));
$officeApp= htmlspecialchars(strip_tags($_POST["officeApp"]));
$officeHours= htmlspecialchars(strip_tags($_POST["officeHours"]));
$osType= htmlspecialchars(strip_tags($_POST["osType"]));
$osHours= htmlspecialchars(strip_tags($_POST["osHours"]));
?>
<h3>Billing Invoice</h3>
<table>
    <tr>
        <td class="left"><?=$fName?> <?=$lName?></td>
        <td class="right">My Computer Workshop</td>
    </tr>
    <tr>
        <td class="left"><?=$address?> </td>
        <td class="right">Metropolitan State University</td>
    </tr>
    <tr>
        <td class="left"><?=$city?>, <?=$state?> <?=$zip?></td>
        <td class="right">Saint Paul Campus</td>
    </tr>
    <tr>
        <td class="left"><?=$phone?> </td>
        <td class="right">Information and Computer Sciences Department</td>
    </tr>
</table>
<h3>Detailed Work Description</h3>
<table>
    <?php
    $total=0;
    echo "<th class='thwork'>Work</th><th class='thhours'>Hours</th>".
        "<th class='thrate'>Rate</th><th class='thcost'>Cost</th>";
    if ($modemType != "none"){
        $tempTotal=0;
        echo "<tr>";
        echo "<td class='lineitemwork'>Install $modemType </td>";
        echo "<td class='lineitemhours'>$modemHours</td>";
        echo "<td class='lineitemrate'>".LABOR."</td>";
        $tempTotal = $modemHours * LABOR;
        echo "<td class='lineitemcost'>\$ $tempTotal</td>";
        $total = $total + $tempTotal;
        echo "</tr>";
    }
    if ($memoryAmount != "none"){
        $tempTotal=0;
        echo "<tr>";
        echo "<td class='lineitemwork'>Install $memoryAmount GB </td>";
        echo "<td class='lineitemhours'>$memHours</td>";
        echo "<td class='lineitemrate'>".LABOR."</td>";
        $tempTotal = $memHours * LABOR;
        echo "<td class='lineitemcost'>\$ $tempTotal</td>";
        $total = $total + $tempTotal;
        echo "</tr>";
    }
    if ($officeApp != "none"){
        $tempTotal=0;
        echo "<tr>";
        echo "<td class='lineitemwork'>Install $officeApp</td>";
        echo "<td class='lineitemhours'>$officeHours</td>";
        echo "<td class='lineitemrate'>".LABOR."</td>";
        $tempTotal = $officeHours * LABOR;
        echo "<td class='lineitemcost'>\$ $tempTotal</td>";
        $total = $total + $tempTotal;
        echo "</tr>";
    }

    if ($osType != "none"){
        $tempTotal=0;
        echo "<tr>";
        echo "<td class='lineitemwork'>Install $osType</td>";
        echo "<td class='lineitemhours'>$osHours</td>";
        echo "<td class='lineitemrate'>".LABOR."</td>";
        $tempTotal = $osHours * LABOR;
        echo "<td class='lineitemcost'>\$ $tempTotal</td>";
        $total = $total + $tempTotal;
        echo "</tr>";
    }
    echo "<th class='thwork'>Total</th><th class='thhours'>&nbsp;</th>".
        "<th class='thrate'>&nbsp;</th><th class='right'> $ $total</th>";
    echo "</table>";
    }
    ?>
</body>
</html>
