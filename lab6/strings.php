<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:59 PM
 */?>
<html>
<head>
    <title>String Handling Function Evaluator</title>
    <meta charset="UTF-8" />
    <style type="text/css">
        body { font-family: Arial, serif; font-size: medium; }
        .mytitle { font-family: cursive; text-align: center; font-size: 2em; font-weight: normal }
    </style>
</head>
<body>
<p class="mytitle">String Handling</p>
<hr />
<!--  EXPLODE -->
<form name="myform" action="results.php" method="post" >
    array = explode(delimiter, string)
    <br /><br />
    Delimiter: <input type="text" name="delimiter" /><br />
    String: <input type="text" name="str" /><br />
    <input type="submit" name="exploderesults" value="explode()" />
</form>
<hr />

<!-- IMPLODE -->
<form name="myform" action="results.php" method="post" >
    implode (delimiter, array)
    <br /><br />
    Delimiter: <input type="text" name="delimiter" /><br />
    Array:
    <input type="text" name="colors" value="Red Green Blue Yellow" readonly='checked' /><br />
    <input type="submit" name="imploderesults" value="implode()" />
</form>
<hr />
<!-- STRTOK -->
<form name="myform" action="results.php" method="post" >
    strtok (string, delimiter)
    <br /><br />
    String: <input type="text" name="str" /><br />
    Delimiter: <input type="text" name="delimiter" /><br /><br />
    <input type="submit" name="strtokresults" value="strtok()" />
</form>
<hr />

<!-- SUBSTR -->
<form name="myform" action="results.php" method="post" >
    substring = substr (string, start, length)
    <br /><br />
    String: <input type="text" name="str" /><br />
    Start: <input type="text" name="start"  /><br />
    Length: <input type="text" name="length"  /><br />
    <input type="submit" name="substringresults" value="substring()" />
</form>
<hr />

<!--  SUBSTR -->
<form name="myform" action="results.php" method="post" >
    substring = substr (string, start)
    <br /><br />
    String: <input type="text" name="str" /><br />
    Start: <input type="text" name="start" /><br />
    <input type="submit" name="substrresults" value="substr()" />
</form>
<hr />

<!-- SUBSTR -->
<form name="myform" action="results.php" method="post" >
    substring = substr (string, -end)<br /><br />
    String: <input type="text" name="str" /><br />
    From end (enter negative number): <input type="text" name="end" /><br />
    <input type="submit" name="ssresults" value="substr()" />
</form>
<hr />

<!-- STRCMP -->
<form name="myform" action="results.php" method="post" >
    int = strcmp (string1, string2 )<br /><br />
    String: <input type="text" name="str" /><br />
    String: <input type="text" name="str2" /><br />
    <input type="submit" name="strcmpresults" value="strcmp" />
</form>
<hr />

<!-- STRCASECMP - not case sensitive -->
<form name="myform" action="results.php" method="post" >
    int = strcasecmp (string1, string2 )<br /><br />
    String: <input type="text" name="str" /><br />
    String: <input type="text" name="str2" /><br />
    <input type="submit" name="strcasecmpresults" value="strcasecmp" />
</form>
<hr />

<!-- STRSTR - substring found or not found -->
<form name="myform" action="results.php" method="post" >
    boolean strstr (string, findstring )<br /><br />
    String: <input type="text" name="str" /><br />
    Find String: <input type="text" name="findstring" /><br />
    <input type="submit" name="strstrresults" value="strstr()" />
</form>
<hr />

<!-- STRPOS - returns position of match -->
<form name="myform" action="results.php" method="post" >
    int = strpos (string, findstring )<br /><br />
    String: <input type="text" name="str" /><br />
    Find String: <input type="text" name="findstring" /><br />
    <input type="submit" name="strposresults" value="strpos()" />
</form>
<hr />

<!-- STR_REPLACE -->
<form name="myform" action="results.php" method="post" >
    string = str_replace (findstring, replacestring, string )<br /><br />
    Find String: <input type="text" name="findstring" /><br />
    Replace With: <input type="text" name="replacestring" /><br />
    String: <input type="text" name="str" /><br />
    <input type="submit" name="str_replaceresults" value="str_replace()" />
</form>
</body>
</html>

