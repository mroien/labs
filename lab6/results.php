<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 8:00 PM
 */
?>
<html>

<head>
    <title>String Handling Function Evaluator</title>
    <meta charset="UTF-8" />
    <style type="text/css">
        body { font-family: Arial, serif; font-size: medium; }
        .mytitle { font-family: cursive;
            text-align: center; font-size: 2em; font-weight: normal }
    </style>
</head>

<body>
<p class="mytitle">String Handling Results</p>
<hr />

<?php
// extract fields from form and create variables
foreach ($_POST as $key=>$value) {
    // create a new variable with a name matching the 'name' attribute of each field in the form
    $$key = htmlspecialchars(strip_tags($value));
}

//  EXPLODE
if (isset($exploderesults)) {  // results of explode
    echo "explode ('" . $delimiter . "', '" . $str . "')";
    echo "<hr />";
    $strarray = explode($delimiter, $str);
    foreach ($strarray as $onestring)
        echo $onestring . "<br />";
}

// IMPLODE
if (isset($imploderesults)) {  // results of implode
    echo "implode ('" . $delimiter . "', array('red', 'green', 'blue', 'yellow'))";
    echo "<hr />";
    $colors = array('red', 'green', 'blue', 'yellow');
    $onestring = implode($delimiter, $colors);
    echo $onestring . "<br />";
}

// STRTOK
if (isset($strtokresults)) {  // results of strtok
    echo "strtok ('" . $str . "', '" . $delimiter . "')";
    echo "<hr />";
    $token = strtok($str, $delimiter);
    while ($token != '') {
        echo $token . "<br />";
        $token = strtok($delimiter);
    }
}

// SUBSTR
if (isset($substringresults)) {
    echo "substring = substr ('" . $str . "', " . $start . ", " . $length . ")";
    echo "<hr />";
    $onestring = substr($str, $start, $length);
    echo $onestring . "<br />";
}

//  SUBSTR
if (isset($substrresults)) {
    echo "substring = substr ('" . $str . "', " . $start . ")";
    echo "<hr />";
    $onestring = substr($str, $start);
    echo $onestring . "<br />";
}

// SUBSTR
if (isset($ssresults)) {
    echo "substring = substr ('" . $str . "', " . $end . ")";
    echo "<hr />";
    $onestring = substr($str, $end);
    echo $onestring . "<br />";
}

// STRCMP
if (isset($strcmpresults)) {
    echo "int = strcmp ('" . $str . ", '" . $str2 . "')";
    echo "<hr />";
    $returnval = strcmp($str, $str2);
    if ($returnval < 0)
        echo $str . " < " . $str2;
    else if ($returnval > 0)
        echo $str . " > " . $str2;
    else
        echo $str . " == " . $str2;
}

// STRCASECMP - not case sensitive
if (isset($strcasecmpresults)) {
    echo "int = strcasecmp ('" . $str . "', '" . $str2 . "')";
    echo "<hr />";
    $returnval = strcasecmp($str, $str2);
    if ($returnval < 0)
        echo $str . " < " . $str2;
    else if ($returnval > 0)
        echo $str . " > " . $str2;
    else
        echo $str . " == " . $str2;
}

// STRSTR - substring found or not found
if (isset($strstrresults)) {
    echo "boolean = strstr ('" . $str . "', '" . $findstring . "')";
    echo "<hr />";
    if (strstr($str, $findstring))
        echo $findstring . " FOUND IN " . $str;
    else
        echo $findstring . " NOT FOUND IN " . $str;
}

// STRPOS - returns position of match
if (isset($strposresults)) {
    echo "int = strpos ('" . $str . "', '" . $findstring . "')";
    echo "<hr />";
    $resultpos = strpos($str, $findstring);
    if ($resultpos !== false)
        echo "Position of $findstring is: " . $resultpos;
    else
        echo $findstring . " NOT FOUND";
}

// STR_REPLACE
if (isset($str_replaceresults)) {
    echo "string = str_replace ('" . $findstring . "', '" . $replacestring . "', '" . $str . "')";
    echo "<hr />";
    echo str_replace($findstring, $replacestring, $str);
}
?>

</body>
</html>
