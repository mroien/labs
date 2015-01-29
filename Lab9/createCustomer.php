<html>
<head>
    <title>Insert New Customer</title>
</head>

<body>

<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:40 PM

This file updates a flat text file with customer
Information.  Based on user input the data will be
Appended to the end of the file.

Variables:
$filePointer   - is a pointer to the file that is opened for reading
                                                             $output        - the string that is written to the text file
$customerInfo - is an array that stores the values from the file

****  Form Variables *********
$custID        - Unique identifier for the customer
                                       $fName         -  Customers First Name
$lName         - Customers Last Name
$address       - Customers Address
$city          - Customers City
$state         - Customers State
$zip           - Customers Zip Code
$submit        - the submit button

*****************************************/

if(isset($_POST['submit'] ) ) {
    @ $filePointer = fopen("files/newCustomers.txt","a");
    if (!$filePointer){
        print "Write access is denied";
        exit;
    }

    // shortcut names
    $custID = $_POST['custID'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    $output = "\"$custID\",\"$fName\",\"$lName\",\"$address\",
	\"$city\",\"$state\",\"$zip\"\n";
    fwrite($filePointer, $output);
    fclose($filePointer);
}   // end if
?>

<h3>Enter Customer Information</h3>
<form name="customerForm" action="" method="post">
    <table>
        <tr>
            <td>ID: </td>
            <td colspan="5">
                <input type=text name="custID" id="custID" size="10" />
            </td>
        </tr>
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
            <td><input type=text name="city" id="city" size="20" /></td>
            <td>State: </td>
            <td>
                <input type=text name="state" id="state" size="5" />
            </td>
            <td>Zip Code: </td>
            <td><input type=text name="zip" id="zip" size="20" /></td>
        </tr>
        <tr>
            <td colspan=2>
                <input type="submit" value="Save Customer Data" name="submit">
            </td>
            <td colspan=4 />
        </tr>
    </table>
</form>

<h3>Current Customers</h3>
<?php
$filePointer = fopen("files/newCustomers.txt", "r");
if (!$filePointer){
    print "The customer file is empty or missing";
    exit;
}

while(!feof($filePointer)){
    $customerInfo = fgetcsv($filePointer, 100, ",");   // read
    if($customerInfo!=""){
        print "$customerInfo[0],$customerInfo[1],$customerInfo[2],
		$customerInfo[3],
                $customerInfo[4],$customerInfo[5],$customerInfo[6] <br />";
    }  // end if
}  // end while
?>
</body>
</html>
