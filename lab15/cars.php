<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/29/2015
 * Time: 2:27 PM
 */
//set the database connection and select the database
$dbcn = new mysqli("localhost","root","root","ics325labs");
?>
<html>
<head><title>Cars</title></head>
<body>
<?php
// has the submit button been pressed
if(isset($_POST['submit'])){
    // set a grand total variable
    $car = $_POST['car'];
    $total = 0;
    echo "You ordered the following Cars <br />";
    // loop through all selection boxes
    foreach($car as $key=>$value)     {
        // if value has been selected
        if($value <> "0")    {
            // sql to get the make and model from 2  different tables
            $sql="SELECT name, model, price FROM car_maker, car_type ".
                "WHERE car_type.id =" .$key .
                " AND car_maker.id = car_type.car_maker_id";
            $rs = $dbcn->query($sql);         // query the database
            $row = $rs->fetch_assoc(); // get the record from the DB
            $tempTotal = $value * $row["price"];     // get line total
            $total = $total + $tempTotal;            // get grand total
            echo $value ." ". $row["name"] ." ". $row["model"] .
                " at $".$row["price"]." each. Total = \$$tempTotal <br />";
        }
    }
    echo "Grand total \$$total";
} else {
    ?>
    <form action="<? $_SERVER['PHP_SELF'] ?>"
          method="post" name="myForm">
        <?php
        // retrieve all car makers and store records in record set
        $sql = "SELECT * from car_maker";
        $maker_rs = $dbcn->query($sql);
        // loop through record set of all car makers
        echo "<table>";
        while($row = $maker_rs->fetch_array())   {
            // display header rows
            echo "<tr><td colspan=3><b>".$row["name"].
                "</b></td><td align=right>"
                . $row["phone"] . "</td></tr>";
            echo "<tr><th align=left>Model</th><th align=left>Price</th>".
                "<th align=left>Quantity</th><th /></tr>";
            $maker = $row["id"];       // remember maker
            // fetch all car models  made by this maker
            $sql = "SELECT id, model, price FROM car_type ".
                "WHERE car_maker_id =".$maker." ORDER BY car_type.id";
            // retrieve models and store in record set of models
            $models_rs = $dbcn->query($sql);
            while ($model_row = $models_rs->fetch_array())  {
                echo "<tr><td width=200>". $model_row["model"] .
                    "</td><td width=100>$" . $model_row["price"] .
                    "</td><td width=100>";
                // set selections to car array with car id as the index
                echo "<select name=car[" . $model_row["id"] . "]>";
                echo "<option value=0>0</option>";
                echo "<option value=1>1</option>";
                echo "<option value=2>2</option>";
                echo "<option value=3>3</option>";
                echo "</select></td></tr>";
            }      // end while
        }      // end while
        ?>
        </table>
        <input type="submit" value="Submit" name="submit" />
    </form>
<?php
}      // end else isset $submit
?>
</body>
</html>
