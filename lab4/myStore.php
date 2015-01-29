<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:40 PM
 */
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
<h3>Please Fill Customer Information</h3>
<form name="orderForm" action="showStore.php" method="post">
    <table class="order">
        <tr>
            <td>First Name: </td>
            <td colspan="2">
                <input type=text name="fName" id="fName" size="30" />
            </td>
            <td>Last Name: </td>
            <td colspan="2">
                <input type=text name="lName" id="lName" size="30" />
            </td>
        </tr>
        <tr>
            <td>Address: </td>
            <td colspan="5">
                <input type=text name="address" id="address" size="80" />
            </td>
        </tr>
        <tr>
            <td>City: </td>
            <td>
                <input type=text name="city" id="city" size="20" />
            </td>
            <td>State: </td>
            <td>
                <input type=text name="state" id="state" size="5" />
            </td>
            <td>Zip Code: </td>
            <td>
                <input type=text name="zip" id="zip" size="20" />
            </td>
        </tr>
        <tr>
            <td>Phone: </td>
            <td colspan=3>
                <input type=text name="phone" id="phone" size="40" />
            </td>
            <td colspan="2" />&nbsp;
        </tr>
    </table>
    <h3>Please Enter Repair Information - Round to Nearest Hour</h3>
    <table class="order">
        <tr>
            <th class="installleft">Install New Modem</th>
            <td>Modem Type: </td>
            <td>
                <select size="1" name="modemType" id="modemType">
                    <option value="none">*** Please Select ***</option>
                    <option value="802.11n">802.11n</option>
                    <option value="802.11b">802.11b</option>
                </select>
            </td>
            <td>Labor Hours: </td>
            <td>
                <input type="text" name="modemHours" id="modemHours" size="10">
            </td>
        </tr>
        <tr>
            <th class="installleft">Install Memory</th>
            <td>Memory Amount: </td>
            <td>
                <select size="1" name="memoryAmount" id="memoryAmount">
                    <option value="none">*** Please Select ***</option>
                    <option value="64">2GB</option>
                    <option value="128">8GB</option>
                    <option value="256">16GB</option>
                </select>
            </td>
            <td>Labor Hours: </td>
            <td>
                <input type="text" name="memHours" id="memHours" size="10">
            </td>
        </tr>
        <tr>
            <th class="installleft">Install Office Application</th>
            <td>Office Application: </td>
            <td>
                <select size="1" name="officeApp" id="officeApp">
                    <option value="none">*** Please Select ***</option>
                    <option value="Word">MS Word</option>
                    <option value="Excel">MS Excel</option>
                    <option value="Power Point">MS Power Point</option>
                    <option value="Microsoft Access">MS Access</option>
                </select>
            </td>
            <td>Labor Hours: </td>
            <td>
                <input type="text" name="officeHours" id="officeHours" size="10">
            </td>
        </tr>
        <tr>
            <th class="installleft">Install Operating System</th>
            <td>Operating System</td>
            <td>
                <select size="1" name="osType" id="osType">
                    <option value="none">*** Please Select ***</option>
                    <option value="Windows 7">Windows 7</option>
                    <option value="Windows 8">Windows 8</option>
                    <option value="Linux">Linux</option>
                </select>
            </td>
            <td>Labor Hours: </td>
            <td>
                <input type="text" name="osHours" id="osHours" size="10">
            </td>
        </tr>
    </table>
    <h3>Please Press Button to Get Work Order</h3>
    <input type="submit" value="Submit Work Order" name="submit" />
</form>
</body>
</html>
